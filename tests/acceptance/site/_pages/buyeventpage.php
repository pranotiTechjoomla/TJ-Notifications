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

class Eventbuy
{
	/**
	 * @var string Url of the page
	 */
	public static $URL = 'index.php/all-events';

	public static $URL1 = 'index.php/component/jticketing/buy/1';

	/**
	 * Array of Page elements indexed by descriptive name or label
	 *
	 * @var array
	 */
	public static $elements = array(
		'username'          => '//*[@id="username"]',
		'password'          => '//*[@id="password"]',
		'Logout'            => '//*[@id="login-form"]/div[2]/input[1]',
		'AllEvent'          => '//*[@id="t3-mainnav"]/div/div/div/ul/li[2]/a',
		'Select Event'      => '//*[@id="jticket_pc_es_app_my_products"]/div[1]/div/div/div[1]/a',
		'Book Event'        => '//*[@id="details"]/div/div[2]/div[3]/div/a',
		'Ticketcount'       => '//*[@id="type_ticketcount[1]"]',
		'Next'              => '//*[@id="btnWizardNext"]',
		'Firstname'         => '//*[@id="fnam"]',
		'Lastname'          => '//*[@id="lnam"]',
		'Email'             => '//*[@id="email1"]',
		'Address'           => '//*[@id="addr"]',
		'Country'           => '//*[@id="country"]',
		'State'             => '//*[@id="state"]',
		'City'              => '//*[@id="city"]',
		'Zip'               => '//*[@id="zip"]',
		'Save&Next'         => '//*[@id="btnWizardNext"]',
		'bycheck'           => '//*[@id="bycheck"]',
		'comment'           => '//*[@id="comment"]',
		'Confirm_Order'     => '//*[@id="btn_check"]'

	);
}
