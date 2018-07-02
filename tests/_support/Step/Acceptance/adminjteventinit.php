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
 * Class AdminJTEventSteps
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.8.7
 *
 */
class AdminJTEventinit extends \AcceptanceTester
{
	/**
	 * Function to create Event
	 *
	 * @return void
	 */
	public function jtevent()
	{
		$I = $this;
		$I->click(\AdmincreateJTEvent::$elements['Components']);
		$I->click(\AdmincreateJTEvent::$elements['Jticketing']);
	}
}
