<?php
/**
 * @package         Asikart.Module
 * @subpackage      mod_experience
 * @copyright       Copyright (C) 2012 Asikart.com, Inc. All rights reserved.
 * @license         GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="experience-module-wrap<?php echo $moduleclass_sfx; ?>">
    <div class="experience-module-wrap-inner">
        
        <ul class="experience-module-list nav nav-tabs nav-stacked">
        <?php foreach( $items as $item ): ?>
            <li class="experience-module-list-item">
                <?php echo JHtml::_('link', $item->link, "{$item->a_created} - {$item->a_title}"); ?>
            </li>
        <?php endforeach; ?>
        </ul>
        
    </div>
</div>