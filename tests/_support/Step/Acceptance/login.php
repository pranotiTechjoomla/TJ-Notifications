<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
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
class Login extends \AcceptanceTester
{
	/**
	 * Function to execute site login for Joomla 3
	 *
	 * @param   string  $user      Username
	 * @param   string  $password  Password
	 *
	 * @return void
	 */
	public function doSiteLogin($user, $password)
	{
		$I = $this;
		$I->am('Site User');
		$I->amOnPage(\SiteLoginPage::$URL);

		// Wait for login text to appear

		$I->fillField(\SiteLoginPage::$elements['username'], $user);
		$I->fillField(\SiteLoginPage::$elements['password'], $password);
		$I->click('Log in');
	}
}
