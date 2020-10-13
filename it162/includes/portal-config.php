<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();
date_default_timezone_set('America/Los_Angeles');
//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){

    case 'index.php':
       $title = "Hannah Eberts' IT162 Webpage";
        $logo = 'fa-home';
        $PageID = 'Welcome';
        break;
        
    case 'contactme.php':
       $title = "Hannah Eberts' Contact page";
        $logo = 'fa-envelope-o';
        $PageID = 'Send me a message!';
        break;
        
    case 'aia.php':
        $title = "Hannah's Final Project AIA";
        $logo = 'fa-diamond';
        $PageID = 'Audience, Issues, and Approaches';
        break;
    
    case 'big/index.php':
       $title = "Big Midterm Project";
        $logo = 'fa-cube';
        $PageID = 'Big Midterm';
        break;
        
    case 'fp/index.php':
       $title = "Final Project";
        $logo = 'fa-smile';
        $PageID = "Hannah's Final";
        break;
        
      case 'flowchart.php':
       $title = "Flowchart";
        $logo = 'fa-bar-chart';
        $PageID = "Flowchart page";
        break;
        
        

        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}

$nav1['index.php'] = 'Home';
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Hannah";

/*
<li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Hannah</a></li>
*/


function makeLinks($nav1)
{
  $myReturn = '';
    foreach($nav1 as $url => $text){
        
      if($url == THIS_PAGE){
          $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
      }else{
          $myReturn .= "<li><a href=\"$url\">$text</a></li>";
      } 
        
        
  }
    
    return $myReturn;
}


?>
