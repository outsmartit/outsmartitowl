<?php

/**
 * @package name
 */
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$bigcaption = $params->get('bigcaption');
$document->addStyleSheet(JURI::base() . '/modules/mod_outsmartitowl/assets/owl.theme.css');
$document->addStyleSheet(JURI::base() . '/modules/mod_outsmartitowl/assets/owl.carousel.css');
$document->addStyleSheet(JURI::base() . '/modules/mod_outsmartitowl/assets/outsmartitowl.css');    

$gumberCarousel = $params->get('carousel_type');
$gumberspeed = $params->get('CarSpeed');
$gumberitems = $params->get('nrOfItems');
$paginationbool = 'false';
$navigationbool = 'false';
$pagination = $params->get('pagination',1);
$navigation = $params->get('navigation',0);
$caption = $params->get('mycaption');

if ($pagination){
    $paginationbool = 'true';
}
if ($navigation){
    $navigationbool = 'true';
}
    
$jq = $params->get('add_jquery');
$owl_id = "owl-demo-" . $module->id;

//variables are declared image1 to 10
$gumber_img = array();
for ($i = 1; $i < 11; $i++) {
    $number= 'image'.$i;
    $captionnr ='caption'.$i;
    $titlenr = 'title'.$i;
    $linknr = 'link'.$i;
    $gumber_img[$number] = $params->get($number);
    $gumber_img[$captionnr] = $params->get($captionnr);
    $gumber_img[$titlenr] = $params->get($titlenr);
    $gumber_img[$linknr]= $params->get($linknr);
}
require JModuleHelper::getLayoutPath('mod_outsmartitowl', 'default');
