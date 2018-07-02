<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class AdmincreateJTVenueCreateFormPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.7
 *
 */

class AdmincreateTJNotificationTemplate
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
		'Notifications'      => '//*[@id="menu"]/li[5]/ul/li[9]/a',
		'Addnew'             => '//*[@id="toolbar-new"]/button',
		'NotificationTitle' => '#jform_title',
		'Client'             => '#jform_client',
		'Key'                => '#jform_key',
		'UserControl'       => '#jform_user_control',
		'EmailTab'          => '//*[@id="adminForm"]/div/div/div/ul/li[2]/a',
		'EmailSubject'      => '#jform_email_subject',
		'EmailBody'         => '#jform_email_body',
		'Email Status'       => '//*[@id="jform_email_status"]/label[1]',
		'SaveAndClose'       => '//*[@id="toolbar-save"]/button',
		);

	/**
	 * Array of Page texts indexed by descriptive texts
	 *
	 * @var array
	 */
	public static $texts = array(
		'NotificationSave'    => 'Item successfully saved.',
	);
}