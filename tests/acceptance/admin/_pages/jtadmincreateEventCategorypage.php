<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class AdminEventCategoryFormPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.7
 *
 */

class AdmincreateJTEventCategory
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
		'Jticketing'              => '//*[@id="menu"]/li[5]/ul/li[4]/a',
		'Category'           => '//*[@id="submenu"]/li[5]',
		'Addnew'             => '//*[@id="toolbar-new"]/button',
		'CategoryTitle'      => '#jform_title',
		'Alias'              => '#alias',
		'SaveAndClose'       => '//*[@id="toolbar-save"]/button',
		);

	/**
	 * Array of Page texts indexed by descriptive texts
	 *
	 * @var array
	 */
	public static $texts = array(
		'CategorySave'       => 'Category successfully saved.',
	);
}
