<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class AdminEventCreateFormPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.7
 *
 */

class AdmincreateJTEvent
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
		'Components'            => '//*[@id="menu"]/li[5]/a',
		'Jticketing'            => '//*[@id="menu"]/li[5]/ul/li[4]/a',
		'Event'                 => '//*[@id="submenu"]/li[4]/a',
		'Addnew'                => '//*[@id="toolbar-new"]/button',
		'EventTitle'            => '#jform_title',
		'Eventcreator'          => '#jform_created_by',
		'SelectCreator'         => '//*[@id="collapse1"]/div/div[2]/div[2]/div/div/a/span',
		'PublishYes'            => '#jform_state0',
		'PublishNo'             => '#jform_state1',
		'Access'                => '#jform_access',
		'EventImage'            => '#jform_image',
		'BookingStartEndDate'   => '//*[@id="myAccordian"]/div[2]/div[1]/strong/a',
		'BookingStartDate'      => '#jform_booking_start_date_img',
		'BookingEndDate'        => '#jform_booking_end_date_img',
		'EventStartEndDate'     => '//*[@id="myAccordian"]/div[3]/div[1]/strong/a',
		'EventStartDate'        => '#jform_startdate_img',
		'EventStartHr'          => '#event_start_time_hour',
		'EventStartMin'         => '#event_start_time_min',
		'EventStartAM'          => '#event_start_time_ampm',
		'EventEndDate'          => '#jform_enddate_img',
		'EventEndHr'            => '#event_end_time_hour',
		'EventEndMin'           => '#event_end_time_min',
		'EventEndAM'            => '#event_end_time_ampm',
		'TicketTypeTab'         => '//*[@id="myTabTabs"]/li[2]/a',
		'TicketTitle1'          => '#ticket_type_title0',
		'TicketDes1'            => '#ticket_type_desc0',
		'TicketState1'          => '#ticket_type_state',
		'TicketPrice1'          => '#ticket_type_price0',
		'SeatAvailLimited1'     => '#ticket_type_unlimited_seats_0',
		'NoSeats'               => '#ticket_type_available0',
		'SaveAndClose'          => '//*[@id="toolbar-save"]/button',
		);

	/**
	 * Array of Page texts indexed by descriptive texts
	 *
	 * @var array
	 */
	public static $texts = array(
		'CategorySave'       => 'Event saved successfully.',
	);
}
