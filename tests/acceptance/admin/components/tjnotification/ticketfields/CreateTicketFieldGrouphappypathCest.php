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

class CreateadminTicketFieldGroupCest
{
	/**
	 * Function to create fake random number
	 *
	 */

	public function __construct()
	{
		$this->faker = Faker\Factory::create();
		$this->title  = 'TicketFieldGroup - ' . $this->faker->randomNumber();
		$this->url  = $this->faker->url();
		$this->alias  = 'TicketFieldGroup-' . $this->faker->randomNumber();
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
	 * Function to check create Ticket Field Group
	 *
	 * @param   string  $I  Object
	 *
	 * @return void
	 */
	public function createadminTicketFieldGroupHappyPath(\Step\Acceptance\adminjtticketfieldgroupinit $I)
	{
		$I->am('Admin Event Creator');
		$I->wantToTest('create Ticket Field Group');
		$I->wantTo('Create the Ticket Field Group');
		$I->amGoingTo('Fill all the form');
		$I->amOnPage(\AdmincreateJTTicketFieldGroup::$URL);

		// Create Ticket Field Group

		$I->click(\AdmincreateJTTicketFieldGroup::$elements['Components']);
		$I->click(\AdmincreateJTTicketFieldGroup::$elements['Jticketing']);
		$I->click(\AdmincreateJTTicketFieldGroup::$elements['FieldsGroup']);
		$I->click(\AdmincreateJTTicketFieldGroup::$elements['Addnew']);
		$I->fillField(\AdmincreateJTTicketFieldGroup::$elements['Fieldlabel'], $this->title);
		$I->wait('3');
		$I->click(\AdmincreateJTTicketFieldGroup::$elements['SaveAndClose']);
		$I->click(\AdminLoginPage::$elements['user']);
		$I->click(\AdminLoginPage::$elements['Logout']);
	}
}
