<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class CreateadminEventFieldsCest
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.7
 *
 */

class CreateadminEventFieldsCest
{
	/**
	 * Function to create fake random number
	 *
	 */

	public function __construct()
	{
		$this->faker = Faker\Factory::create();
		$this->title  = 'EventField - ' . $this->faker->randomNumber();
		$this->url  = $this->faker->url();
		$this->alias  = 'EventField-' . $this->faker->randomNumber();
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
	 * Function to create a event field
	 *
	 * @param   string  $I  Object
	 *
	 * @return void
	 */

	public function createadminEventFieldsHappyPath(\Step\Acceptance\adminjteventfieldsinit $I)
	{
		$I->am('Admin Event Creator');
		$I->wantToTest('create Event Field');
		$I->wantTo('Create the Event Field');
		$I->amGoingTo('Fill all the form');
		$I->amOnPage(\AdmincreateJTEventFields::$URL);

		// Create Event Field

		$I->click(\AdmincreateJTEventFields::$elements['Components']);
		$I->click(\AdmincreateJTEventFields::$elements['Jticketing']);
		$I->click(\AdmincreateJTEventFields::$elements['Fields']);
		$I->click(\AdmincreateJTEventFields::$elements['Addnew']);
		$I->fillField(\AdmincreateJTEventFields::$elements['Fieldlabel'], $this->title);
		$I->fillField(\AdmincreateJTEventFields::$elements['FieldName'], $this->alias);
		$I->click(\AdmincreateJTEventFields::$elements['SelectFieldType']);
		$I->click(\AdmincreateJTEventFields::$elements['SelectTypeRadio']);
		$I->fillField(\AdmincreateJTEventFields::$elements['FieldOptions0'], $this->title);
		$I->fillField(\AdmincreateJTEventFields::$elements['FieldValue0'],  $this->alias);
		$I->click(\AdmincreateJTEventFields::$elements['Add']);
		$I->fillField(\AdmincreateJTEventFields::$elements['FieldOptions1'], $this->title);
		$I->fillField(\AdmincreateJTEventFields::$elements['FieldValue1'],  $this->alias);
		$I->click(\AdmincreateJTEventFields::$elements['Add']);
		$I->fillField(\AdmincreateJTEventFields::$elements['FieldOptions2'], $this->title);
		$I->fillField(\AdmincreateJTEventFields::$elements['FieldValue2'],  $this->alias);
		$I->click(\AdmincreateJTEventFields::$elements['Add']);
		$I->fillField(\AdmincreateJTEventFields::$elements['FieldOptions3'], $this->title);
		$I->fillField(\AdmincreateJTEventFields::$elements['FieldValue3'],  $this->alias);
		$I->click(\AdmincreateJTEventFields::$elements['Remove']);
		$I->click(\AdmincreateJTEventFields::$elements['SelectCategory']);
		$I->click(\AdmincreateJTEventFields::$elements['SelectSpcific']);
		$I->wait('3');
		$I->click(\AdmincreateJTEventFields::$elements['Filterable']);
		$I->click(\AdmincreateJTEventFields::$elements['FilterableYes']);
		$I->wait('3');
		$I->click(\AdmincreateJTEventFields::$elements['SaveAndClose']);
		$I->click(\AdminLoginPage::$elements['user']);
		$I->click(\AdminLoginPage::$elements['Logout']);
	}
}
