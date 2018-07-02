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

class AdmincreateCoupon
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
		'Jticketing'            => '//*[@id="menu"]/li[5]/ul/li[6]/a',
		'Coupon'                => '//*[@id="submenu"]/li[13]/a',
		'Addnew'                => '//*[@id="toolbar-new"]/button',
		'CouponTitle'           => '#jform_name',
		'CouponCode'            => '#jform_code',
		'CouponValue'           => '#jform_value',
		'CouponFlat'            => '//*[@id="jform_val_type"]/label[2]',
		'CouponPercent'         => '//*[@id="jform_val_type"]/label[1]',
		'CouponMaxUses'         => '#jform_max_use',
		'CouponPublish'         => '//*[@id="jform_state"]/label[1]',
		'CouponUnPublish'       => '//*[@id="jform_state"]/label[2]',
		'MaxUsesPerPerson'      => '#jform_max_per_user',
		'StartDate'             => '#jform_from_date_img',
		'EndDate'               => '#jform_exp_date_img',
		'CouponDecs'            => '#jform_description',
		'Couponparam'           => '#jform_coupon_params',
		'SaveAndClose'          => '//*[@id="toolbar-save"]/button',
		);

	/**
	 * Array of Page texts indexed by descriptive texts
	 *
	 * @var array
	 */
	public static $texts = array(
		'CouponSave'            => 'Coupon successfully saved.',
	);
}
