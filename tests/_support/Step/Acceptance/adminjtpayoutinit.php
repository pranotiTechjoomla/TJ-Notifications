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
 * Class AdminJTPayoutSteps
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.8.7
 *
 */
class AdminJTPayoutinit extends \AcceptanceTester
{
	/**
	 * Function to create a payout
	 *
	 * @return void
	 */
	public function jtpayout()
	{
		$I = $this;
		$I->click(\AdmincreateJTPayout::$elements['Components']);
		$I->click(\AdmincreateJTPayout::$elements['Jticketing']);
	}
}
