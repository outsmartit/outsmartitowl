<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_gumberowl
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
if ($jq == 1) {
JHtml::_('jquery.framework');}
$document->addScript(JURI::base() . 'modules/mod_gumberowl/assets/owl.carousel.min.js');

if ($gumberCarousel == 'O') {
    $document->addScriptDeclaration('jQuery(document).ready(function () {
            jQuery("#' . $owl_id . '").owlCarousel({
                autoPlay: ' . $gumberspeed . ',
                navigation: false, 
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                pagination:'.$paginationbool.',
            });
        });');
} elseif ($gumberCarousel == 'I') {
    $document->addScriptDeclaration('jQuery(document).ready(function () {
            jQuery("#' . $owl_id . '").owlCarousel({
                autoPlay: ' . $gumberspeed . ', 
                items : ' . $gumberitems . ',
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3]
            });
        });');
}elseif ($gumberCarousel == 'L') {
    $document->addScriptDeclaration('jQuery(document).ready(function () {
            jQuery("#' . $owl_id . '").owlCarousel({
                autoPlay: ' . $gumberspeed . ', 
                items : ' . $gumberitems . ',
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3]
            });
        });');
}
?>

<div id="<?php echo $owl_id; ?>" class="owl-carousel owl-theme">
    <?php if($gumberimage1) : ?>
    <div class="item"><img src="<?php echo $gumberimage1; ?>" alt="mytext"></div>
    <?php endif; ?>
    <?php if($gumberimage2) : ?>
    <div class="item"><img src="<?php echo $gumberimage2; ?>" alt="mytext"></div>
    <?php endif; ?>
    <?php if($gumberimage3) : ?>
    <div class="item"><img src="<?php echo $gumberimage3; ?>" alt="mytext"></div>
    <?php    endif; ?>
    <?php if($gumberimage4) : ?>
    <div class="item"><img src="<?php echo $gumberimage4; ?>" alt="mytext"></div>
    <?php    endif; ?>
    <?php if($gumberimage5) : ?>
    <div class="item"><img src="<?php echo $gumberimage5; ?>" alt="mytext"></div>
    <?php    endif; ?>
    <?php if($gumberimage6) : ?>
    <div class="item"><img src="<?php echo $gumberimage6; ?>" alt="mytext"></div>
    <?php    endif; ?>
     <?php if($gumberimage7) : ?>
    <div class="item"><img src="<?php echo $gumberimage7; ?>" alt="mytext"></div>
    <?php    endif; ?>
     <?php if($gumberimage8) : ?>
    <div class="item"><img src="<?php echo $gumberimage8; ?>" alt="mytext"></div>
    <?php    endif; ?>
     <?php if($gumberimage9) : ?>
    <div class="item"><img src="<?php echo $gumberimage9; ?>" alt="mytext"></div>
    <?php    endif; ?>
     <?php if($gumberimage10) : ?>
    <div class="item"><img src="<?php echo $gumberimage10; ?>" alt="mytext"></div>
    <?php    endif; ?>
</div>