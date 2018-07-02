<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class CreateadminReminderCest
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.7
 *
 */

class CreateadminReminderCest
{
	/**
	 * Function to create fake random number
	 *
	 */

	public function __construct()
	{
		$this->faker = Faker\Factory::create();
		$this->title  = 'Reminder - ' . $this->faker->randomNumber();
		$this->url  = $this->faker->url();
		$this->no  = '1' . $this->faker->randomNumber();
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
	 * Function to check if create reminder with sending a email and sms set to No
	 *
	 * @param   string  $I  Object
	 *
	 * @return void
	 */

	public function createadminReminderHappyPath(\Step\Acceptance\adminjtreminderinit $I)
	{
		$I->am('Admin Event Creator');
		$I->wantToTest('create Reminder');
		$I->wantTo('Create the Reminder');
		$I->amGoingTo('Fill all the form');
		$I->amOnPage(\AdmincreateReminder::$URL);

		// Create Reminder

		$I->click(\AdmincreateReminder::$elements['Components']);
		$I->click(\AdmincreateReminder::$elements['Jticketing']);
		$I->click(\AdmincreateReminder::$elements['Reminder']);
		$I->click(\AdmincreateReminder::$elements['Addnew']);
		$I->fillField(\AdmincreateReminder::$elements['ReminderTitle'], $this->title);
		$I->fillField(\AdmincreateReminder::$elements['ReminderDesc'], 'Test');
		$I->fillField(\AdmincreateReminder::$elements['NoOfDays'], $this->no);
		$I->fillField(\AdmincreateReminder::$elements['ReminderSubject'], 'Eight Days');
		$I->fillField(\AdmincreateReminder::$elements['ReplyEmail'], 'dipali@maildrop.cc');
		$I->click(\AdmincreateReminder::$elements['SendSmsNO']);
		$I->click(\AdmincreateReminder::$elements['SendEmailYes']);
		$I->fillField(\AdmincreateReminder::$elements['EmailTemplate'], 'Test Description');
		$I->click(\AdmincreateReminder::$elements['SaveAndClose']);
		$I->click(\AdminLoginPage::$elements['user']);
		$I->click(\AdminLoginPage::$elements['Logout']);
	}
}
