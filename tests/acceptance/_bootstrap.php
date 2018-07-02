<?php
/**
 * @version    SVN:<SVN_ID>
 * @package    Jticketing
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  Copyright  2009-2016 Techjoomla. All rights reserved
 * @license    GNU General Public License version 2, or later
 */

// Here you can initialize variables that will be available to your tests
//~ \Codeception\Util\Autoload::registerSuffix('Page', __DIR__ . DIRECTORY_SEPARATOR . 'site/_pages');

\Codeception\Util\Autoload::registerSuffix('Steps', __DIR__ . DIRECTORY_SEPARATOR . '_steps');

\Codeception\Util\Autoload::registerSuffix('Page', __DIR__ . DIRECTORY_SEPARATOR . 'admin/_pages');


//~ // Site Page classes
//~ require  __DIR__ . DIRECTORY_SEPARATOR . 'site/_pages/siteloginpage.php';
//~ require  __DIR__ . DIRECTORY_SEPARATOR . 'site/_pages/buyeventpage.php';


// Admin Page classes
require  __DIR__ . DIRECTORY_SEPARATOR . 'admin/_pages/adminloginpage.php';
require  __DIR__ . DIRECTORY_SEPARATOR . 'admin/_pages/jtadmincreateTJNotificationTemplate.php';

