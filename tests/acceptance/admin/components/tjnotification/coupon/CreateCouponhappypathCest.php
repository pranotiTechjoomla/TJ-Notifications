<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class CreateadminCouponCest
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.7
 *
 */

class CreateadminCouponCest
{
	/**
	 * Function to create fake random number
	 *
	 */

	public function __construct()
	{
		$this->faker = Faker\Factory::create();
		$this->title  = 'Coupon - ' . $this->faker->randomNumber();
		$this->url  = $this->faker->url();
		$this->no  = '10' . $this->faker->randomNumber();
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
		//~ $adminlogin->doAdminLogin('admin', 'abcd1234');
		$adminlogin->saveSessionSnapshot('Adminlogin');
	}

	/**
	 * Function to check if create content button shon without selecting content type, lang, concepts
	 *
	 * @param   string  $I  Object
	 *
	 * @return void
	 */

	public function createadminCouponHappyPath(\Step\Acceptance\adminjtcouponinit $I)
	{
		$I->am('Admin Event Creator');
		$I->wantToTest('create Coupon');
		$I->wantTo('Create the Coupon');
		$I->amGoingTo('Fill all the form');
		$I->amOnPage(\AdmincreateCoupon::$URL);

		// Create Coupon

		$I->click(\AdmincreateCoupon::$elements['Components']);
		$I->wait(5);
		$I->click(\AdmincreateCoupon::$elements['Jticketing']);
		$I->click(\AdmincreateCoupon::$elements['Coupon']);
		$I->click(\AdmincreateCoupon::$elements['Addnew']);
		$I->fillField(\AdmincreateCoupon::$elements['CouponTitle'], $this->title);
		$I->fillField(\AdmincreateCoupon::$elements['CouponCode'], $this->no);
		$I->fillField(\AdmincreateCoupon::$elements['CouponValue'], '10');
		$I->click(\AdmincreateCoupon::$elements['CouponFlat']);
		$I->fillField(\AdmincreateCoupon::$elements['CouponMaxUses'], '100');
		$I->click(\AdmincreateCoupon::$elements['CouponPublish']);
		$I->fillField(\AdmincreateCoupon::$elements['MaxUsesPerPerson'], '100');

		// $I->fillField(\AdmincreateCoupon::$elements['StartDate'], '2016-12-28 15:53:08');
		// $I->fillField(\AdmincreateCoupon::$elements['EndDate'], '2016-12-28 18:53:08');

		$I->click(\AdmincreateCoupon::$elements['SaveAndClose']);
		$I->wait('3');
		$I->click(\AdminLoginPage::$elements['user']);
		$I->click(\AdminLoginPage::$elements['Logout']);
	}
}
