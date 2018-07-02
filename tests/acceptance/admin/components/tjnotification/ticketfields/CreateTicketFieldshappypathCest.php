<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class CCreateadminTicketFieldsCest
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.7
 *
 */

class CreateadminTicketFieldsCest
{
	/**
	 * Function to create fake random number
	 *
	 */

	public function __construct()
	{
		$this->faker = Faker\Factory::create();
		$this->title  = 'TicketField - ' . $this->faker->randomNumber();
		$this->url  = $this->faker->url();
		$this->alias  = 'TicketField-' . $this->faker->randomNumber();
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
	 * Function to check create a ticket field
	 *
	 * @param   string  $I  Object
	 *
	 * @return void
	 */

	public function createadminTicketFieldsHappyPath(\Step\Acceptance\adminjtticketfieldsinit $I)
	{
		$I->am('Admin Event Creator');
		$I->wantToTest('create Ticket Field');
		$I->wantTo('Create the Ticket Field');
		$I->amGoingTo('Fill all the form');
		$I->amOnPage(\AdmincreateJTTicketFields::$URL);

		// Create Ticket Field

		$I->click(\AdmincreateJTTicketFields::$elements['Components']);
		$I->click(\AdmincreateJTTicketFields::$elements['Jticketing']);
		$I->click(\AdmincreateJTTicketFields::$elements['Fields']);
		$I->click(\AdmincreateJTTicketFields::$elements['Addnew']);
		$I->fillField(\AdmincreateJTTicketFields::$elements['Fieldlabel'], $this->title);
		$I->fillField(\AdmincreateJTTicketFields::$elements['FieldName'], $this->alias);
		$I->click(\AdmincreateJTTicketFields::$elements['SelectFieldType']);
		$I->click(\AdmincreateJTTicketFields::$elements['SelectTypeRadio']);
		$I->fillField(\AdmincreateJTTicketFields::$elements['FieldOptions0'], $this->title);
		$I->fillField(\AdmincreateJTTicketFields::$elements['FieldValue0'],  $this->alias);
		$I->click(\AdmincreateJTTicketFields::$elements['Add']);
		$I->fillField(\AdmincreateJTTicketFields::$elements['FieldOptions1'], $this->title);
		$I->fillField(\AdmincreateJTTicketFields::$elements['FieldValue1'],  $this->alias);
		$I->click(\AdmincreateJTTicketFields::$elements['Add']);
		$I->fillField(\AdmincreateJTTicketFields::$elements['FieldOptions2'], $this->title);
		$I->fillField(\AdmincreateJTTicketFields::$elements['FieldValue2'],  $this->alias);
		$I->click(\AdmincreateJTTicketFields::$elements['Add']);
		$I->fillField(\AdmincreateJTTicketFields::$elements['FieldOptions3'], $this->title);
		$I->fillField(\AdmincreateJTTicketFields::$elements['FieldValue3'],  $this->alias);
		$I->click(\AdmincreateJTTicketFields::$elements['Remove']);
		$I->click(\AdmincreateJTTicketFields::$elements['SelectCategory']);
		$I->click(\AdmincreateJTTicketFields::$elements['SelectSpcific']);
		$I->wait('3');
		$I->click(\AdmincreateJTTicketFields::$elements['Filterable']);
		$I->click(\AdmincreateJTTicketFields::$elements['FilterableYes']);
		$I->wait('3');
		$I->click(\AdmincreateJTTicketFields::$elements['SaveAndClose']);
		$I->click(\AdminLoginPage::$elements['user']);
		$I->click(\AdminLoginPage::$elements['Logout']);
	}
}
