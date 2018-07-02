<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class AdminReminderFormPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.7
 *
 */

class AdmincreateReminder
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
		'Reminder'           => '//*[@id="submenu"]/li[13]/a',
		'Addnew'             => '//*[@id="toolbar-new"]/button',
		'ReminderTitle'      => '#jform_title',
		'ReminderDesc'       => '#jform_description',
		'NoOfDays'           => '#jform_days',
		'ReminderSubject'    => '#jform_subject',
		'ReplyEmail'         => '#jform_replytoemail',
		'SendSmsYes'         => '#jform_sms0',
		'SendSmsNO'          => '//*[@id="jform_sms"]/label[2]',
		'SendEmailYes'       => '//*[@id="jform_email"]/label[1]',
		'SendEmailNo'        => '#jform_email1',
		'SmsTemplate'        => '#jform_sms_template',
		'EmailTemplate'      => '#jform_sms_template',
		'SaveAndClose'       => '//*[@id="toolbar-save"]/button',
		);

	/**
	 * Array of Page texts indexed by descriptive texts
	 *
	 * @var array
	 */
	public static $texts = array(
		'ReminderSave'       => 'Item successfully saved.',
	);
}
