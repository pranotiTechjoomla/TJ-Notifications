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
class AdminJTTicketFieldGroupinit extends \AcceptanceTester
{
	/**
	 * Function to check if create Ticket Field group.
	 *
	 * @return void
	 */
	public function jtticketfieldgroup()
	{
		$I = $this;
		$I->click(\AdmincreateJTTicketFieldGroup::$elements['Components']);
		$I->click(\AdmincreateJTTicketFieldGroup::$elements['Jticketing']);
	}
}
