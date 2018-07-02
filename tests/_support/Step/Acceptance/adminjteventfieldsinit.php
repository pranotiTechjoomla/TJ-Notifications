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
 * Class AdminJTEventFieldsSteps
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.8.7
 *
 */
class AdminJTEventFieldsinit extends \AcceptanceTester
{
	/**
	 * Function to create Event Field
	 *
	 * @return void
	 */
	public function jteventfield()
	{
		$I = $this;
		$I->click(\AdmincreateJTEventFields::$elements['Components']);
		$I->click(\AdmincreateJTEventFields::$elements['Jticketing']);
	}
}
