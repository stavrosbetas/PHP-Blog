<?php

/*
* Format the date
*/
 
function formatDate($date){
	
	return date('F j, Y, g:i a', strtotime($date));
}

/*
*	Shorten text
*/

function shortenText($text, $chars = 450){
$text = $text. " ";
$text = substr($text, 0, $chars);  //(the first parameter is the text, the second is the start position and the third is the length)
$text = substr($text, 0, strrpos($text, ' '));
$text = $text. ".....";
return $text;
}




?>