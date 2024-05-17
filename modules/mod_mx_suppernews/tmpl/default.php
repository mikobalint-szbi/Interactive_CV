<?php
/**
* @title			Mx Super news
* @version   		4.0.27
* @copyright   		Copyright (C) 2019 mixwebtemplates.com, All rights reserved.
* @license    		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
* @author url   	http://www.mixwebtemplates.com/
* @author email   	info@mixwebtemplates.com
* @developers   	mixwebtemplates.com
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Language\Text;
$document = Factory::getDocument();
$modID = $module->id;
$sl_items = $params->get('sl_items');
$ol_image = $params->get('ol_image');
$ol_title = $params->get('ol_title');
$ol_name = $params->get('ol_name');
$ol_link = $params->get('ol_link');
$ol_info = $params->get('ol_info');
$ol_icon = $params->get('ol_icon');
$get_target = $params->get('get_target');
$customstyle = $params->get('customstyle');
$items_size = $params->get('items_size');
$butt_ics           = $params->get('butt_ics');
$ju_image_width = $params->get('ju_image_width');
$ju_image_width_tabl = $params->get('ju_image_width_tabl');
$ju_image_width_tabp = $params->get('ju_image_width_tabp');
$ju_image_width_mobl = $params->get('ju_image_width_mobl');
$ju_image_width_mobp = $params->get('ju_image_width_mobp');
$loadjquery = $params->get('loadjquery');
$sliderload = $params->get('sliderload');
$styleloads	= $params->get('styleloads');
$ol_extcolor	= $params->get('ol_extcolor');
$show_font	= $params->get('show_font');
$showDate = $params->get('item_date_display', 1);
$show_date_format = $params->get('show_date_format', 1);
$modPath = Uri::root(true).'/modules/' . $module->module;
$document->addStyleSheet($modPath.'/assets/css/style10.css');
if($show_font) $document->addStyleSheet($modPath.'/assets/font-awesome.css');
if($loadjquery) $document->addScript($modPath.'/assets/js/jquery.js');
if($sliderload) $document->addScript($modPath.'/assets/js/jquery.owl.carousel.js');
if($sliderload) $document->addScript($modPath.'/assets/js/theme.js');
$document->addStyleDeclaration(' #npost'.$modID.' .newsbox_sett { margin:'.$params->get('container_fix',6).'px;}');
if($ol_extcolor) $document->addStyleDeclaration(' .news-block .image-box .overlay-box { background:'.$params->get('ol_extcolor').'  padding-box content-box;}.news-block .inner-box:hover .caption-box h3 a { color:'.$params->get('ol_extcolor').';}');
if($sliderload) $document->addStyleSheet($modPath.'/assets/css/owl.carousel.css');
else $document->addStyleDeclaration('#npost' . $modID . ' .newsbox_item {float:left;width:' . $ju_image_width . ';}
@media only screen and (min-width: 960px) and (max-width: 1280px) {#npost' . $modID . ' .newsbox_item {width:' . $ju_image_width_tabl . ';}}
@media only screen and (min-width: 768px) and (max-width: 959px) {#npost' . $modID . ' .newsbox_item {width:' . $ju_image_width_tabp . ';}}
@media only screen and ( max-width: 767px ) {#npost' . $modID . ' .newsbox_item {width:' . $ju_image_width_mobl . ';}}
@media only screen and (max-width: 440px) {#npost' . $modID . ' .newsbox_item {width:' . $ju_image_width_mobp . ';}}');

?>            
<div id="npost<?php echo $modID ?>"  class="news-block ">
<?php if($params->get('sliderload')=='1') : ?><div class="owl-carousel <?php echo $params->get('navStyle')?> <?php echo $params->get('navPosit')?> <?php echo $params->get('navRounded')?>" data-dots="false" data-autoplay="<?php echo $params->get('autoplay')?>" data-autoplay-hover-pause="<?php echo $params->get('autoplay-hover-pause')?>" data-autoplay-timeout="<?php echo $params->get('autoplay-timeout')?>" data-autoplay-speed="<?php echo $params->get('autoplay-speed')?>" data-loop="<?php echo $params->get('dataLoop')?>" data-nav="<?php echo $params->get('dataNav')?>" data-nav-speed="<?php echo $params->get('autoplay-speed')?>" data-items="<?php echo $params->get('image_width')?>" data-tablet-landscape="<?php echo $params->get('image_width_tabl')?>" data-tablet-portrait="<?php echo $params->get('image_width_tabp')?>" data-mobile-landscape="<?php echo $params->get('image_width_mobl')?>" data-mobile-portrait="<?php echo $params->get('image_width_mobp')?>"><?php endif; ?>

<?php foreach($sl_items as $item) { ?>
<div class="newsbox_item">
<div class="newsbox_sett">
<div class="inner-box">
<div class="image-box">
<figure class="image"><img src="<?php echo $item->ol_image; ?>" alt="<?php echo $item->ol_title; ?>"></figure>
<div class="overlay-box"><?php if (!empty($item->ol_link)) : ?> <a href="<?php echo $item->ol_link; ?>" target="<?php echo $item->get_target; ?>" ><i class="fa fa-link"></i></a><?php endif;?></div>
</div>
<div class="caption-box">
<?php if ($item->ol_title != '') : ?> <h3><?php echo $item->ol_title; ?></h3><?php endif; ?>
<ul class="info">
<?php if (!empty($item->ol_name)) : ?><li><?php echo $item->ol_name; ?></li><?php endif; ?>
</ul>
<?php if (!empty($item->ol_info)) : ?>	
<div class="mos-img"><?php echo $item->ol_info; ?></div>
<?php endif;?>
</div>
</div>
</div>
</div>				
<?php } ?>
<?php if($params->get('sliderload')=='1') : ?></div><?php endif; ?>
</div>