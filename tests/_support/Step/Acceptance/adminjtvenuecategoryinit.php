<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017s Techjoomla. All rights reserved
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
class AdminJTVenueCategoryinit extends \AcceptanceTester
{
	/**
	 * Function to check if create content link is accessible to guest users
	 *
	 * @return void
	 */
	public function jtvenuecat()
	{
		$I = $this;
		$I->click(\AdmincreateJTVenueCategory::$elements['Components']);
		$I->click(\AdmincreateJTVenueCategory::$elements['Jticketing']);
	}
}
