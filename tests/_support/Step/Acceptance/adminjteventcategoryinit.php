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
 * Class AdminjgiveCategorySteps
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.8.7
 *
 */
class AdminJTEventCategoryinit extends \AcceptanceTester
{
	/**
	 * Function to  Event Category
	 *
	 * @return void
	 */
	public function jteventcat()
	{
		$I = $this;
		$I->click(\AdmincreateJTEventCategory::$elements['Components']);
		$I->click(\AdmincreateJTEventCategory::$elements['Jticketing']);
	}
}
