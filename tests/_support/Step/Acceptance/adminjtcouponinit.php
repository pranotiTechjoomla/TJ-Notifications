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
 * Class AdminCouponSteps
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.8.7
 *
 */
class AdminJTCouponinit extends \AcceptanceTester
{
	/**
	 * Function to create a coupon
	 *
	 * @return void
	 */
	public function coupon()
	{
		$I = $this;
		$I->click(\AdmincreateCoupon::$elements['Components']);
		$I->click(\AdmincreateCoupon::$elements['Jticketing']);
	}
}
