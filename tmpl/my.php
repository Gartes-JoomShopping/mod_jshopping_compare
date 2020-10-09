<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php require JModuleHelper::getLayoutPath('mod_jshopping_compare', '_ccolor');?>
<div id="jshop_module_compare" class="compare-wrapp <?php print $set_color;?>" data-jscolor="<?php print $set_color;?>">
    <div id="jshop_quantity_products" class="compare-header">
        <p class="click_mycompare">
            <!-- <?php // print $compare_name; ?> -  -->
            <a class="go_to_compre_mod <?php if (!count($compare_arr)){print "compare_dnone";}?>" href="<?php print $seflink;?>"><span class="compareIcon"></span><span class="count_compare"><?php print count($compare_arr)?></span></a>
        </p>
    </div>
</div>