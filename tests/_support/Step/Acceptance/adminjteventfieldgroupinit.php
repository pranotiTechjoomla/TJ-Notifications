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
 * Class AdminJTEventFieldGroupSteps
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.8.7
 *
 */
class AdminJTEventFieldGroupinit extends \AcceptanceTester
{
	/**
	 * Function to create Event Field Group
	 *
	 * @return void
	 */
	public function jteventfieldgroup()
	{
		$I = $this;
		$I->click(\AdmincreateJTEventFieldGroup::$elements['Components']);
		$I->click(\AdmincreateJTEventFieldGroup::$elements['Jticketing']);
	}
}
