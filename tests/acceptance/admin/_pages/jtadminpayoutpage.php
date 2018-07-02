<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2016 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class AdmincreateJTPayoutFormPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.5
 *
 */

class AdmincreateJTPayout
{
	/**
	 * @var string Url of the page
	 */
	public static $URL = 'administrator/index.php';

	/**
	 * Array of Page elements indexed by descriptive name or label
	 *
	 * @var array
	 */
	public static $elements = array(

		'Components'         => '//*[@id="menu"]/li[5]/a',
		'Jticketing'         => '//*[@id="menu"]/li[5]/ul/li[4]/a',
		'Payout'             => '//*[@id="submenu"]/li[10]/a',
		'Addnew'             => '//*[@id="toolbar-new"]/button',
		'PayeeName'          => '#payee_name',
		'EventCreator'       => '//*[@id="payee_options_chzn"]/a',
		'SelectCreator'      => '//*[@id="payee_options_chzn"]/div/ul/li[2]',
		'UserID'             => '#user_id',
		'PaypalEmail'        => '#paypal_email',
		'TrasactionID'       => '#transaction_id',
		'Date'               => '#payout_date_img',
		'SelectTodayDate '   => '//tr[4]/td[4]',
		'Amount'             => '#payment_amount',
		'Unpaid'             => '#status2',
		'paid'               => '#status1',
		'SaveAndClose'       => '//*[@id="toolbar-save"]/button',

		// Payout List View

		'Checkbox'           => '//*[@id="j-main-container"]/table/thead/tr/th[1]/input',
		'CsvExport'          => '//*[@id="toolbar-custom"]/a',
		'Delete'             => '//*[@id="toolbar-delete"]/button'
);

	/**
	 * Array of Page texts indexed by descriptive texts
	 *
	 * @var array
	 */
	public static $texts = array(
		'PayoutSave'        => 'Category successfully saved.',
	);
}
