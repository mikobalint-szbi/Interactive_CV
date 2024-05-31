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
        
    <?php if ($secDip != "") :?>
        <h1>Secondary Education</h1>
        <p><?php echo $secSchool ?></p>
        <p>
            <?php echo $secDip ?>
            <?php if ($showYears) :?>
                <?php echo $secStart ?>
                -
            <?php endif?>
            <?php echo $secEnd ?>
        </p>
    <?php endif;?>

    <?php if ($uni1Dip != "") :?>
        <?php if ($secDip != "") :?>
            <h1>University Education</h1>
        <?php endif?>
        <p><?php echo $uni1School ?></p>
        <p>
            <?php echo $uni1Dip ?>
            <?php if ($showYears) :?>
                <?php echo $uni1Start ?>
                -
            <?php endif?>
            <?php echo $uni1End ?>
        </p>
    <?php endif;?>
        
    </div>
</div>