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
$uni1Dip = $params->get('uni1d');
$uni1School = $params->get('uni1');
$uni1Start = $params->get('uni1s');
$uni1End = $params->get('uni1f');
$uni2Dip = $params->get('uni2d');
$uni2School = $params->get('uni2');
$uni2Start = $params->get('uni2s');
$uni2End = $params->get('uni2f');
$uni3Dip = $params->get('uni3d');
$uni3School = $params->get('uni3');
$uni3Start = $params->get('uni3s');
$uni3End = $params->get('uni3f');
$uni4Dip = $params->get('uni4d');
$uni4School = $params->get('uni4');
$uni4Start = $params->get('uni4s');
$uni4End = $params->get('uni4f');
$uni5Dip = $params->get('uni5d');
$uni5School = $params->get('uni5');
$uni5Start = $params->get('uni5s');
$uni5End = $params->get('uni5f');
$uni6Dip = $params->get('uni6d');
$uni6School = $params->get('uni6');
$uni6Start = $params->get('uni6s');
$uni6End = $params->get('uni6f');

$showYears = $params->get('schoolstartyears');


$items              = modeducationHelper::getItems($params) ;
$moduleclass_sfx    = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_education', $params->get('layout', 'default'));