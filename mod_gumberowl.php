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
$pagination = $params->get('pagination');
if ($pagination){
    $paginationool = 'true';
}
else{
    $paginationbool = 'false';
}
$jq = $params->get('add_jquery');
$owl_id = "owl-demo-" . $module->id;


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
