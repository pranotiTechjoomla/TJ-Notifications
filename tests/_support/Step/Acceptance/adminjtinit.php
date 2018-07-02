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
class Adminjtinit extends \AcceptanceTester
{
	/**
	 * Function to check jt
	 *
	 * @return void
	 */
	public function jt()
	{
		$I = $this;
		$I->click(\AdmincreateJTVenueCategory::$elements['Components']);
		$I->click(\AdmincreateJTVenueCategory::$elements['Jticketing']);
	}
}
