<?php
date_default_timezone_set("Asia/Kolkata");
$link = mysqli_connect("localhost","spsdaurm_user","12345","spsdaurm_users");
// Check connection
if (mysqli_connect_errno())
{
	die ("Failed to connect to MySQL: " . mysqli_connect_error());
}

/*if (!empty($_POST)) {
	foreach ($_POST as $key => $value) {
		$_POST[$key] = is_array($key) ? $_POST[$key]: strip_tags($_POST[$key], '<a><b><u><i>');
	}
}*/
//$query = "INSERT INTO `users` (`email`, `password`) VALUES('kirsten@gmail.com','asbfbyu8HJD')";

//$query = "UPDATE `users` SET password = 'strongPass' WHERE email = 'abhinav4848@hotmail.com' LIMIT 1";

//$query = "SELECT * FROM users";
//$query = "SELECT * FROM users WHERE id = 1";
//% symbol means "anything" and then what you put after means anything that ends with gmail.com
//$query = "SELECT * FROM users WHERE email LIKE '%gmail.com'";
/*$name = "Abhinav o' grady";
$query = "SELECT `email` FROM users WHERE name = '".mysqli_real_escape_string($link, $name)."'";

if ($result = mysqli_query($link, $query)) {
	//each time you mysqli_fetch_array($result), you fetch a new row. Hence all 3 below are diff. So might as well make a while loop.
	//$row = mysqli_fetch_array($result);
	//print_r($row);
	//$row = mysqli_fetch_array($result);
	//print_r($row);
	//$row = mysqli_fetch_array($result);
	//print_r($row);
	while ($row = mysqli_fetch_array($result)) {
		print_r($row);
		echo "<br>";
	}
}
*/
?>