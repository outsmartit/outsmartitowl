<?php

/**
 * @package  mod_outsmartitowl
 * Author:   Diederik - outsmartit.be
 * Version:  2.0.1
 * Created:  January 2016
 * Updated:  June 2017
 * 
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$bigcaption = $params->get('bigcaption');

$document->addStyleSheet(JURI::base() . '/modules/mod_outsmartitowl/assets/owl.carousel.min.css');
$document->addStyleSheet(JURI::base() . '/modules/mod_outsmartitowl/assets/owl.theme.default.min.css');
$document->addStyleSheet(JURI::base() . '/modules/mod_outsmartitowl/assets/outsmartitowl.css');    

$gumberCarousel = $params->get('carousel_type');
$gumberspeed = $params->get('CarSpeed');
$gumberitems = $params->get('nrOfItems');
$paginationbool = 'false';
$navigationbool = 'false';
//$loop = 'false';
//$autoplay = 'true';
$pagination = $params->get('pagination',1);
$navigation = $params->get('navigation',0);
$loop = $params->get('loop',0);
$autoplay = $params->get('autoplay',0);
$caption = $params->get('mycaption');

if ($pagination){
    $paginationbool = 'true';
}
if ($navigation){
    $navigationbool = 'true';
}
    
$jq = $params->get('add_jquery');
//used to have multiple carousels on one page
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
