<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2016 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class CreateadminVeneueCest
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.5
 *
 */

class CreateadminNotificationCest
{
	/**
	 * Function to create fake random number
	 *
	 */

	public function __construct()
	{
		$this->faker = Faker\Factory::create();
		$this->title  = 'Notification - ' . $this->faker->randomNumber();
		$this->url  = $this->faker->url();
		$this->alias  = 'Notification-' . $this->faker->randomNumber();
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
	 * Function to check if create venue with selecting venue category, location, state
	 *
	 * @param   string  $I  Object
	 *
	 * @return void
	 */

	public function createadminNotificationHappyPath(\Step\Acceptance\AdminTJNotificationinit $I)
	{
		$I->am('Admin Notification Creator');
		$I->wantToTest('create notification');
		$I->wantTo('Create email Notification template');
		$I->amGoingTo('Fill all the form');
		$I->amOnPage(\AdmincreateTJNotificationTemplate::$URL);

		// Create Venue

		$I->click(\AdmincreateTJNotificationTemplate::$elements['Components']);
		$I->click(\AdmincreateTJNotificationTemplate::$elements['Notifications']);
		$I->click(\AdmincreateTJNotificationTemplate::$elements['Addnew']);
		$I->fillField(\AdmincreateTJNotificationTemplate::$elements['NotificationTitle'], $this->title);
		$I->selectOption(\AdmincreateTJNotificationTemplate::$elements['Client'], 'com_jticketing');
		$I->fillField(\AdmincreateTJNotificationTemplate::$elements['Key'], 'test');
		$I->click(\AdmincreateTJNotificationTemplate::$elements['EmailTab']);
		$I->fillField(\AdmincreateTJNotificationTemplate::$elements['EmailSubject'], 'New email subject');
		$I->fillField(\AdmincreateTJNotificationTemplate::$elements['EmailBody'], "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
		$I->click(\AdmincreateTJNotificationTemplate::$elements['SaveAndClose']);
		$I->click(\AdminLoginPage::$elements['user']);
		$I->click(\AdminLoginPage::$elements['Logout']);
	}
}
