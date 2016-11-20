<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Name: <input type="text" name="fname">
	<input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_REQUEST['fname'];
	if (empty($name)) {
		echo "Name is empty";
	} else {
		echo $name;
	}
}
/*The request superglobal is used to collect data after submitting an HTML form. */
?>
</body>
</html>
