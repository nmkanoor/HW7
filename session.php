<?php  
session_start();  
$_SESSION['w3resource']='The largest online tutorial';  
echo $_SESSION['w3resource'];  
/*superglobal variable represents data available to a PHP script that has previously been stored in a session.*/
?>  
