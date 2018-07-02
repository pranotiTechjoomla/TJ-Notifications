<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class AdminLoginFormPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.7
 *
 */

class AdminLoginPage
{
	/**
	 * @ var string Url of the page
	 */
	public static $URL = 'administrator/index.php';

	/**
	 * Array of Page elements indexed by descriptive name or label
	 *
	 * @var array
	 */
	public static $elements = array(
		'username' => '//*[@id="mod-login-username"]',
		'password' => '//*[@id="mod-login-password"]',
		'user'     => '/html/body/nav/div/div/div/ul[3]/li/a',
		'Logout'   => '/html/body/nav/div/div/div/ul[3]/li/ul/li[5]/a'
	);
}
