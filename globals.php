<?php
$x = 75; 
$y = 25;
 
function addition() { 
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
      
addition(); 
echo $z; 
?>
//PHP super global variables are used to access global variables from
anywhere in the PHP script//
