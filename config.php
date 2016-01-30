<?php
//config.php

define ('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//echo THIS_PAGE;
//die;

$nav1 ['template.php' ] = 'Home';
$nav1 ['hawaii.php' ] = 	'Hawaii';
$nav1 ['fiji.php' ] = 	'Fiji';
$nav1 ['monaco.php' ] = 'Monaco';
$nav1 ['contact.php' ] = 'Contact Us';
$nav1 ['tj.php' ] = 'Travel Survey';
/*
echo '<pre>';
var_dump ($nav1); 
echo '</pre>';
die;
*/


switch(THIS_PAGE){
	

		
	case 'hawaii.php':
		$title ="Welcome to Hawaii | Compass International Travel";
		$banner ="Welcome to Hawaii";
		$img = "images/hawaii.jpg";
		break;
		
		
		case 'fiji.php':
		$title ="Welcome to Fiji | Compass International Travel";
		$banner ="Welcome to Fiji";
		$img = "images/fiji.gif";
		break;	
		
		case 'monaco.php':
		$title ="Monaco Title Tag | Compass International Travel";
		$banner ="Welcome to Monaco";
		$img = "images/mon.jpg";
		break;	
		
		case 'contact.php':
		$title ="Contact Compass International Travel";
		$banner ="Just a Phone Call Away";
		$img = "images/cs.jpg";
		break;	
		
		case 'tj.php':
		$title ="Compass International Travel Survey";
		$banner ="Take Our Survey";
		break;
		
	default:
		$title ="Home Page-Welcome to Compass International Travel ";
		$banner ="Welcome Compass Travel";
		$img = "images/heade.jpg";
	}


function makeLinks($nav)
{
	
	$myReturn= '';
	foreach($nav as $url => $label)
	
	{
		
		if($url==THIS_PAGE)
		{  //current page, add class
		$myReturn .= '<li class="current"><a href=" '. $url . ' ">
		
		'. $label . '</a></li>';
	
		}else{ //no class
		$myReturn .= '<li><a href=" '. $url . ' ">
		
		'. $label . '</a></li>';
		
	}
		
		
		
	}
	
	return $myReturn;
}
	
	
	
	 			/*<li><a href="index.html">Home</a></li>
              <li><a href="ourwork.html">Our Work</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li><a href="projects.html">Projects</a></li>
              <li class="current"><a href="contact.html">Contact Us</a></li>
	*/
	
/* 
builds and sends a safe email, using Reply-To properly!

$today = date("Y-m-d H:i:s");
$to = 'me@example.com';
$subject = 'Test Email, No ReplyTo: ' . $today;
$message = '
	Test Message Here.  Below should be a carriage return or two: ' . PHP_EOL . PHP_EOL .
	'Here is some more text.  Hopefully BELOW the carriage return!
';

safeEmail ($to, $subject, $message, $replyTo='');

*/
function safeEmail($to, $subject, $message, $replyTo='')
{#builds and sends a safe email, using Reply-To properly!
	$fromDomain = $_SERVER["SERVER_NAME"];
	$fromAddress = "noreply@" . $fromDomain; //form always submits from domain where form resides
	if($replyTo==''){$replyTo='';}
	$headers = 'From: ' . $fromAddress . PHP_EOL .
		'Reply-To: ' . $replyTo . PHP_EOL .
		'X-Mailer: PHP/' . phpversion();
	return mail($to, $subject, $message, $headers);
}



function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}
	
	
	
	
	
	
			
	
?>