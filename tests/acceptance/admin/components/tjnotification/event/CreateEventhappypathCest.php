<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * ClassCreateadminEventCest
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.7
 *
 */

class CreateadminEventCest
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
		if ($I->loadSessionSnapshot('Adminlogin'))
		{
			return;
		}
	}

	/**
	 * Function to load login
	 *
	 * @param   string  $I           Object
	 *
	 * @param   string  $adminlogin  Object
	 *
	 * @return void
	 */

	public function adminLogin(\Step\Acceptance\adminjtinit $I, \Step\Acceptance\adminlogin $adminlogin)
	{
		// I get the configuration from acceptance.suite.yml (see: tests/_support/acceptancehelper.php)
		$adminlogin->doAdminLogin($I->getConfiguration('Username'), $I->getConfiguration('Password'));
		$adminlogin->saveSessionSnapshot('Adminlogin');
	}

	/**
	 * Function to check if create content button shon without selecting content type, lang, concepts
	 *
	 * @param   string  $I  Object
	 *
	 * @return void
	 */

	public function createadminEventHappyPath(\Step\Acceptance\adminjteventinit $I)
	{
		$I->am('Admin Event Creator');
		$I->wantToTest('create Event');
		$I->wantTo('Create the event');
		$I->amGoingTo('Fill all the form');
		$I->amOnPage(\AdmincreateJTEvent::$URL);

		// Create Event

		$I->click(\AdmincreateJTEvent::$elements['Components']);
		$I->click(\AdmincreateJTEvent::$elements['Jticketing']);
		$I->click(\AdmincreateJTEvent::$elements['Event']);
		$I->click(\AdmincreateJTEvent::$elements['Addnew']);
		$I->fillField(\AdmincreateJTEvent::$elements['EventTitle'], $this->title);

		/** $I->click("//div[@id='collapse1']/div/div[2]/div[2]/div/div/a");
		 $I->selectFrame====field-user-modal||
		 $I->click("Super User");
		 $I->selectWindow====null||
		*/

		$I->fillField(\AdmincreateJTEvent::$elements['EventImage'], '/home/ttpl45/Documents/Dipali/images/exhibition.jpg');
		$I->click(\AdmincreateJTEvent::$elements['BookingStartEndDate']);
		$I->click(\AdmincreateJTEvent::$elements['BookingStartDate']);
		$I->click(\AdmincreateJTEvent::$elements['BookingEndDate']);
		$I->click(\AdmincreateJTEvent::$elements['EventStartEndDate']);
		$I->click(\AdmincreateJTEvent::$elements['EventStartDate']);
		$I->selectOption(\AdmincreateJTEvent::$elements['EventStartHr'], '5');
		$I->click(\AdmincreateJTEvent::$elements['EventStartMin']);
		$I->selectOption(\AdmincreateJTEvent::$elements['EventStartAM'], 'AM');
		$I->js.executeScript("window . scrollBy(0,200)");

		$I->click(\AdmincreateJTEvent::$elements['EventEndDate']);
		$I->click(\AdmincreateJTEvent::$elements['EventEndHr']);
		$I->click(\AdmincreateJTEvent::$elements['EventEndMin']);

		$I->selectOption(\AdmincreateJTEvent::$elements['EventEndAM'], 'PM');
		$I->click(\AdmincreateJTEvent::$elements['TicketTypeTab']);
		$I->fillField(\AdmincreateJTEvent::$elements['TicketTitle1'], 'Gold');
		$I->fillField(\AdmincreateJTEvent::$elements['TicketDes1'], 'Test');
		$I->fillField(\AdmincreateJTEvent::$elements['TicketPrice1'], '20');
		$I->fillField(\AdmincreateJTEvent::$elements['NoSeats'], '20');
		$I->wait('3');
		$I->click(\AdmincreateJTEvent::$elements['SaveAndClose']);
		$I->click(\AdminLoginPage::$elements['user']);
		$I->click(\AdminLoginPage::$elements['Logout']);
	}
}
