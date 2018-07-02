<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU#0000FF General Public License version 2, or later
 */

/**
 * ClassCreateadminEventCest
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.7
 *
 */

class BuyEventhappypathCest
{
	/**
	 * Function to create fake random number
	 *
	 */

	public function __construct()
	{
		$this->faker = Faker\Factory::create();
		$this->title  = 'Event - ' . $this->faker->randomNumber();
		$this->url  = $this->faker->url();
		$this->alias  = 'Category-' . $this->faker->randomNumber();
	}

	/**
	 * Function to load login
	 *
	 * @param   string  $I  Object
	 *
	 * @return void
	 */

	public function _before(AcceptanceTester $I)
	{
		if ($I->loadSessionSnapshot('SiteLogin'))
		{
			return;
		}
	}

	/**
	 * Function to load login
	 *
	 * @param   string  $I          Object
	 *
	 * @param   string  $sitelogin  Object
	 *
	 * @return void
	 */

	public function siteLogin(\Step\Acceptance\jteventinit $I, \Step\Acceptance\login $sitelogin)
	{
		// I get the configuration from acceptance.suite.yml (see: tests/_support/acceptancehelper.php)
		$sitelogin->doSiteLogin($I->getConfiguration('Username'), $I->getConfiguration('Password'));
		$sitelogin->saveSessionSnapshot('SiteLogin');
	}

	/**
	 * Function to check if create content button shon without selecting content type, lang, concepts
	 *
	 * @param   string  $I  Object
	 *
	 * @return void
	 */

	public function buyeventhappypath(\Step\Acceptance\jteventinit $I)
	{
		$I->am(' Event Buyer Creator');
		$I->wantToTest('But Ticket');
		$I->wantTo('Buy the event');
		$I->amGoingTo('Fill all the billing form');

		// Buy Event
		$I->click(\Eventbuy::$elements['AllEvent']);

		// $I->click(\Eventbuy::$elements['AllEvent']);
		$I->click(\Eventbuy::$elements['Select Event']);
		$I->wait('5');
		$I->executeJS('window.scrollTo(0,200);');
		$I->amOnPage(\Eventbuy::$URL1);
		$I->wait('5');
		$I->fillField(\Eventbuy::$elements['Ticketcount'], "2");
		$I->click(\Eventbuy::$elements['Next']);
		$I->fillField(\Eventbuy::$elements['Firstname'], 'Dipali');
		$I->fillField(\Eventbuy::$elements['Lastname'], 'Ingole');
		$I->fillField(\Eventbuy::$elements['Email'], 'dipali@mailinator.com');
		$I->executeJS('window.scrollTo(0,200);');
		$I->fillField(\Eventbuy::$elements['Address'], 'test');
		$I->selectOption(\Eventbuy::$elements['Country'], 'India');
		$I->wait('3');
		$I->selectOption(\Eventbuy::$elements['State'], 'Maharashtra');
		$I->wait('3');
		$I->fillField(\Eventbuy::$elements['City'], 'Pune');
		$I->executeJS('window.scrollTo(0,200);');
		$I->fillField(\Eventbuy::$elements['Zip'], '234234');
		$I->click(\Eventbuy::$elements['Save&Next']);
		$I->wait('3');
		$I->click(\Eventbuy::$elements['bycheck']);
		$I->executeJS('window.scrollTo(0,200);');
		$I->wait('3');
		$I->fillField(\Eventbuy::$elements['comment'], 'Testing automation');
		$I->click(\Eventbuy::$elements['Confirm_Order']);
	}
}
