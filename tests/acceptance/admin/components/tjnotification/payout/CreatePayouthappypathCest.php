<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class CreateadminPayoutCest
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.7
 *
 */

class CreateadminPayoutCest
{
	/**
	 * Function to create fake random number
	 *
	 */

	public function __construct()
	{
		$this->faker = Faker\Factory::create();
		$this->title  = 'Payout - ' . $this->faker->randomNumber();
		$this->url  = $this->faker->url();
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
	 * Function to check
	 *
	 * @param   string  $I  Object
	 *
	 * @return void
	 */

	public function createadminPayoutHappyPath(\Step\Acceptance\adminjtpayoutinit $I)
	{
		$I->am('Admin Event Creator');
		$I->wantToTest('create payout');
		$I->wantTo('Create the payout');
		$I->amGoingTo('Fill all the form');
		$I->amOnPage(\AdmincreateJTPayout::$URL);

		// Create Paid payout

		$I->click(\AdmincreateJTPayout::$elements['Components']);
		$I->click(\AdmincreateJTPayout::$elements['Jticketing']);
		$I->click(\AdmincreateJTPayout::$elements['Payout']);
		$I->click(\AdmincreateJTPayout::$elements['Addnew']);
		$I->click(\AdmincreateJTPayout::$elements['EventCreator']);
		$I->click(\AdmincreateJTPayout::$elements['SelectCreator']);
		$I->fillField(\AdmincreateJTPayout::$elements['PaypalEmail'], $this->email);
		$I->fillField(\AdmincreateJTPayout::$elements['TrasactionID'], $this->id);
		$I->wait('3');
		$I->click("#payout_date_img");
		$I->click("//tr[4]/td[4]");

		/**
		$I->click(\AdmincreateJTPayout::$elements['Date']);
		$I->click(\AdmincreateJTPayout::$elements['SelectTodayDate']);
	 */
		$I->wait('3');

		// $I->fillField(\AdmincreateJTPayout::$elements['SelectTodayDate']);
		$I->click(\AdmincreateJTPayout::$elements['paid']);
		$I->click(\AdmincreateJTPayout::$elements['SaveAndClose']);
		$I->click(\AdminLoginPage::$elements['user']);
		$I->click(\AdminLoginPage::$elements['Logout']);
	}
}
