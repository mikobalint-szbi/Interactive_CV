<?php
/**
 * @package         Asikart.Module
 * @subpackage      mod_education
 * @copyright       Copyright (C) 2012 Asikart.com, Inc. All rights reserved.
 * @license         GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
$secDip = $params->get('secondaryd');
$secSchool = $params->get('secondary');
$secStart = $params->get('secondarys');
$secEnd = $params->get('secondaryf');
$showYears = $params->get('schoolstartyears');


$items              = modeducationHelper::getItems($params) ;
$moduleclass_sfx    = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_education', $params->get('layout', 'default'));