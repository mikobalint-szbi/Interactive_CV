<?php 

    defined('_JEXEC') or die;
    use Joomla\CMS\Helper\ModuleHelper;
    use Joomla\Module\mod_hello\HelloHelper;
    
    $test = HelloHelper::getText();

    require ModuleHelper::getLayoutPath('mod_hello', $params->get('layout', 'default'));
?>