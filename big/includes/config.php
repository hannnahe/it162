<?php

/*
portal-config.php

Used to store all of our it162 configuration information

*/

//prevents data from being sent early
ob_start();

//place your site keys here 
$siteKey = "6LeCodYZAAAAAMulCdMopsny10sezKDIvLpvzG9I";
$secretKey = "6LeCodYZAAAAAOAbCf2NQq-rv_V89iH1IklUHrY0";

//end config area ----------------------------------------
date_default_timezone_set('America/Los_Angeles');
//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){

    case 'index.php':
       $title = 'Big Homepage';
        $logo = 'fa-smile';
        $PageID = 'Client Questionnaire';
        break;
        
    case 'galleries.php':
       $title = 'Gallery Research';
        $logo = 'fa-camera-retro';
        $PageID = 'Research on Galleries';
        break;
        
    case 'flexbox.php':
        $title = 'Flexbox Research';
        $logo = 'fa-cube';
        $PageID = 'Flexbox Research';
        break;
    
    case 'map.php':
       $title = 'Seattle Central Map';
        $logo = 'fa-map-marker';
        $PageID = 'Seattle Central on Google';
        break;
        
    case 'calendar.php':
       $title = 'Google Calendar';
        $logo = 'fa-calendar';
        $PageID = 'The National Nordic Museum';
        break;
        
      case 'youtube.php':
       $title = 'Youtube Video on Accessibility Testing';
        $logo = 'fa-youtube';
        $PageID = 'Youtube video of Accessibility Testing';
        break;
        
      case 'shoppingcarts.php':
       $title = 'Cart Research';
        $logo = 'fa-shopping-cart';
        $PageID = 'Shopping Cart Platform Research';
        break;
        
        case 'siteapp.php':
       $title = 'Responsive vs. Mobile Research';
        $logo = 'fa-mobile';
        $PageID = 'Responsive vs. Mobile page';
        break;
        
          case 'webcam.php':
       $title = 'Web Cams';
        $logo = 'fa-adjust';
        $PageID = 'Live web cameras';
        break;
        
         case '#':
       $title = 'Google Tools';
        $logo = 'fa-chevron-down';
        $PageID = 'GoogleTools';
        break;
        
        
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}


?>
