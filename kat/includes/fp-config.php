<?php
//prevents data from being sent early
ob_start();

date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = 'Katherine Fox Photography';
        $PageID = 'Katherine Fox Photography';
    break;
    
    case 'personal.php':
        $title = 'Katherine Fox Photography';
        $PageID = 'Katherine Fox Photography';
    break;
        
        case 'about.php':
        $title = 'Katherine Fox Photography';
        $PageID = 'Contact Me';
    break;
        
    default:
        $title = 'Katherine Fox Photography';
        $PageID = 'Katherine Fox Photography';
   }

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Works";
$nav1['personal.php'] = "Personal";
$nav1['about.php'] = "About";


/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>
