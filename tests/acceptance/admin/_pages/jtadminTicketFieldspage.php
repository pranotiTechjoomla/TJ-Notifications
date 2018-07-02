<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright (c) 2009-2017 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

/**
 * Class AdmincreateJTTicketFieldsFormPage
 *
 * @link   http://codeception.com/docs/07-AdvancedUsage#PageObjects
 *
 * @since  1.8.7
 *
 */

class AdmincreateJTTicketFields
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
		'Components'                  => '//*[@id="menu"]/li[5]/a',
		'Jticketing'                  => '//*[@id="menu"]/li[5]/ul/li[4]/a',
		'Fields'                      => '//*[@id="submenu"]/li[17]/a',
		'Addnew'                      => '//*[@id="toolbar-new"]/button',
		'Fieldlabel'                  => '#jform_label',
		'FieldName'                   => '#jform_name',
		'SelectFieldType'             => '//*[@id="jform_type_chzn"]/a/span',
		'SelectTypeRadio'             => '//*[@id="jform_type_chzn"]/div/ul/li[2]',
		'Add'                         => '#add',
		'Remove'                      => '#remove0',
		'FieldOptions0'               => '#tjfields_optionname_0',
		'FieldValue0'                 => '#tjfields_optionvalue_0',
		'FieldOptions1'               => '#tjfields_optionname_1',
		'FieldValue1'                 => '#tjfields_optionvalue_1',
		'FieldOptions2'               => '#tjfields_optionname_2',
		'FieldValue2'                 => '#tjfields_optionvalue_2',
		'FieldOptions3'               => '#tjfields_optionname_3',
		'FieldValue3'                 => '#tjfields_optionvalue_3',
		'SelectCategory'              => '//*[@id="jformcategory_chzn"]/ul/li/input',
		'SelectSpcific'               => '//*[@id="jformcategory_chzn"]/div/ul/li[1]',
		'Filterable'                  => '#jform_filterable',
		'FilterableYes'               => '//*[@id="jform_filterable"]/label[1]',
		'FilterableNo'                => '//*[@id="jform_filterable"]/label[2]',
		'SaveAndClose'                => '//*[@id="toolbar-save"]/button',
		);

	/**
	 * Array of Page texts indexed by descriptive texts
	 *
	 * @var array
	 */
	public static $texts = array(
		'FieldSave'                   => 'Field created successfully.',
	);
}
