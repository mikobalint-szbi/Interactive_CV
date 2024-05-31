<?php
/**
 * @package         Asikart.Module
 * @subpackage      mod_education
 * @copyright       Copyright (C) 2012 Asikart.com, Inc. All rights reserved.
 * @license         GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="education-module-wrap<?php echo $moduleclass_sfx; ?>">
    <div class="education-module-wrap-inner">
        
    <?php if ($secDip != null) :?>
        <h1>Secondary Education</h1>
        <p><?php echo $secSchool ?></p>
        <p>
            <?php echo $secDip ?>
        </p>
    <?php endif;?>
        
    </div>
</div>