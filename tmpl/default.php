<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
$count =  ( is_array( $compare_arr ) ? count($compare_arr) : 0   ) ;
require JModuleHelper::getLayoutPath('mod_jshopping_compare', '_ccolor');?>
<div id="jshop_module_compare" class="compare-wrapp <?php print $set_color;?>" data-jscolor="<?php print $set_color;?>">
    <div id="jshop_quantity_products" class="compare-header">
        <p class="click_mycompare">
            <!-- <?php // print $compare_name; ?> -  -->
            <span class="compareIcon"></span><span class="count_compare"><?php print $count ?></span>
        </p>
    </div>
    <?php require JModuleHelper::getLayoutPath('mod_jshopping_compare', '_ccontent');?>
</div>