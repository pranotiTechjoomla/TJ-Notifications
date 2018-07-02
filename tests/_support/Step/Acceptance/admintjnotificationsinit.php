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
 * Class AdminJTVenueSteps
 *
 * @package  AcceptanceTester
 *
 * @link     http://codeception.com/docs/07-AdvancedUsage#StepObjects
 *
 * @since    1.8.7
 *
 */
class AdminTJNotificationinit extends \AcceptanceTester
{
	/**
	 * Function to check if create content link is accessible to guest users
	 *
	 * @return void
	 */
	public function tjNotification()
	{
		$I = $this;
		$I->click(\AdmincreateTJNotificationTemplate::$elements['Components']);
		$I->click(\AdmincreateTJNotificationTemplate::$elements['Notifications']);
	}
}
