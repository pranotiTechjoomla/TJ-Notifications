<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2016 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

namespace Step\Acceptance;


/**
 * Class LoginSteps
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.8.7
 *
 */
class Adminlogin extends \AcceptanceTester
{
	/**
	 * Function to execute site login for Joomla 3
	 *
	 * @param   string  $user      Username
	 * @param   string  $password  Password
	 *
	 * @return void
	 */
	public function doAdminLogin($user, $password)
	{
		$I = $this;
		$I->am('Admin User');
		$I->amOnPage(\AdminLoginPage::$URL);

		// Wait for login text to appear

		$I->fillField(\AdminLoginPage::$elements['username'], $user);
		$I->fillField(\AdminLoginPage::$elements['password'], $password);
		$I->click('Log in');

		// $I->click(\AdminLoginPage::$elements['user']);
		// $I->click(\AdminLoginPage::$elements['Logout']);
	}
}
