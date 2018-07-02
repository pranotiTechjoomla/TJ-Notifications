<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2016 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class CreateadminEventFieldGroupCest
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.5
 *
 */

class CreateadminEventFieldGroupCest
{
	/**
	 * Function to create fake random number
	 *
	 */

	public function __construct()
	{
		$this->faker = Faker\Factory::create();
		$this->title  = 'EventFieldGroup - ' . $this->faker->randomNumber();
		$this->url  = $this->faker->url();
		$this->alias  = 'EventFieldGroup -' . $this->faker->randomNumber();
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

	public function createadminEventFieldGroupHappyPath(\Step\Acceptance\adminjteventfieldgroupinit $I)
	{
		$I->am('Admin Event Creator');
		$I->wantToTest('create Event Field Group');
		$I->wantTo('Create the Event Field Group');
		$I->amGoingTo('Fill all the form');
		$I->amOnPage(\AdmincreateJTEventFieldGroup::$URL);

		// Create Event Field Group

		$I->click(\AdmincreateJTEventFieldGroup::$elements['Components']);
		$I->click(\AdmincreateJTEventFieldGroup::$elements['Jticketing']);
		$I->click(\AdmincreateJTEventFieldGroup::$elements['FieldsGroup']);
		$I->click(\AdmincreateJTEventFieldGroup::$elements['Addnew']);
		$I->fillField(\AdmincreateJTEventFieldGroup::$elements['Fieldlabel'], $this->title);
		$I->wait('3');
		$I->click(\AdmincreateJTEventFieldGroup::$elements['SaveAndClose']);
		$I->click(\AdminLoginPage::$elements['user']);
		$I->click(\AdminLoginPage::$elements['Logout']);
	}
}
