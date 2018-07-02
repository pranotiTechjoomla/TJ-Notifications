<?php
/**
 * @package     Mustached
 * @subpackage  Page Class
 * @copyright   Copyright (C) 2014 mustached.org All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Class SiteLoginPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.0
 *
 */

class SiteLoginPage
{
	/**
	 * @var string Url of the page
	 */
	public static $URL = '/index.php?option=com_users';

	/**
	 * Array of Page elements indexed by descriptive name or label
	 *
	 * @var array
	 */
	public static $elements = array(
		'username' => '//*[@id="username"]',
		'password' => '//*[@id="password"]',
		'Logout' => '//*[@id="login-form"]/div[2]/input[1]'
	);
}
