<?php

/**
 * @package name
 */
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . '/modules/mod_gumberowl/assets/owl.theme.css');
$document->addStyleSheet(JURI::base() . '/modules/mod_gumberowl/assets/owl.carousel.css');
$gumberCarousel = $params->get('carousel_type');
$gumberspeed = $params->get('CarSpeed');
$gumberitems = $params->get('nrOfItems');
$jq = $params->get('add_jquery');
$owl_id = "owl-demo-" . $module->id;
if ($jq == 1) {
    JHtml::_('jquery.framework');
    $document->addScript(JURI::base() . 'modules/mod_gumberowl/assets/owl.carousel.min.js');
}
if ($gumberCarousel == 'O') {
    $document->addScriptDeclaration('jQuery(document).ready(function () {
            jQuery("#' . $owl_id . '").owlCarousel({
                autoPlay: ' . $gumberspeed . ',
                navigation: false, 
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true
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
}


$gumberimage1 = $params->get('image1');
$gumberimage2 = $params->get('image2');
$gumberimage3 = $params->get('image3');
$gumberimage4 = $params->get('image4');
$gumberimage5 = $params->get('image5');
$gumberimage6 = $params->get('image6');
$gumberimage7 = $params->get('image7');
$gumberimage8 = $params->get('image8');
$gumberimage9 = $params->get('image9');
$gumberimage10 = $params->get('image10');
require JModuleHelper::getLayoutPath('mod_gumberowl', 'default');
