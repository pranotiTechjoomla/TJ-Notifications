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
 * Class AdminJTTicketFieldsSteps
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.8.7
 *
 */
class AdminJTTicketFieldsinit extends \AcceptanceTester
{
	/**
	 * Function to create TicketFields
	 *
	 * @return void
	 */
	public function jtticketfield()
	{
		$I = $this;
		$I->click(\AdmincreateJTTicketFields::$elements['Components']);
		$I->click(\AdmincreateJTTicketFields::$elements['Jticketing']);
	}
}
