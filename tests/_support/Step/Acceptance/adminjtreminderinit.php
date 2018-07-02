<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jgive
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2016 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

namespace Step\Acceptance;

/**
 * Class AdminReminderSteps
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.4
 *
 */
class AdminJTReminderinit extends \AcceptanceTester
{
	/**
	 * Function to check if create content link is accessible to guest users
	 *
	 * @return void
	 */
	public function reminder()
	{
		$I = $this;
		$I->click(\AdmincreateReminder::$elements['Components']);
		$I->click(\AdmincreateReminder::$elements['Jticketing']);
	}
}
