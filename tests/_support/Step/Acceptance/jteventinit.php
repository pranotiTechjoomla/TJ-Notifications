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
 * Class AdminjtickingStpes
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.8.7
 *
 */
class Jteventinit extends \AcceptanceTester
//class Adminjtinit extends \AcceptanceTester
{
	/**
	 * Function to check jt
	 *
	 * @return void
	 */
	public function jteventinit()
	{
		$I = $this;
		$I->click(\Eventbuy::$elements['username'], $user);
		$I->fillField(\Eventbuy::$elements['password'], $password);
		$I->click('Log in');
	}
}
