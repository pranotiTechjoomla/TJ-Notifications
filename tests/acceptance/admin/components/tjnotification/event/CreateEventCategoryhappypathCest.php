<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2016 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class CreateadminEventCategoryCest
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.7
 *
 */

class CreateadminEventCategoryCest
{
	/**
	 * Function to create fake random number
	 *
	 */

	public function __construct()
	{
		$this->faker = Faker\Factory::create();
		$this->title  = 'ECategory - ' . $this->faker->randomNumber();
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
	 * Function to Create Event Category
	 *
	 * @param   string  $I  Object
	 *
	 * @return void
	 */

	public function createadminEventCategoryHappyPath(\Step\Acceptance\adminjteventcategoryinit $I)
	{
		$I->am('Admin Event Creator');
		$I->wantToTest('create event category');
		$I->wantTo('Create the event category');
		$I->amGoingTo('Fill all the form');
		$I->amOnPage(\AdmincreateJTEventCategory::$URL);

		// Create Event Category

		$I->click(\AdmincreateJTEventCategory::$elements['Components']);
		$I->click(\AdmincreateJTEventCategory::$elements['Jticketing']);
		$I->click(\AdmincreateJTEventCategory::$elements['Category']);
		$I->click(\AdmincreateJTEventCategory::$elements['Addnew']);
		$I->fillField(\AdmincreateJTEventCategory::$elements['CategoryTitle'], $this->title);

		//$I->fillField(\AdmincreateJTEventCategory::$elements['Alias'], $this->alias);

		$I->click(\AdmincreateJTEventCategory::$elements['SaveAndClose']);
		$I->click(\AdminLoginPage::$elements['user']);
		$I->click(\AdminLoginPage::$elements['Logout']);
	}
}
