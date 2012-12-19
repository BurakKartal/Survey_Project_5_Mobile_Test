<?php

$hostname = 'localhost';
$dbname = 'survey';
$username = 'root';
$password = '';

$con = mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');

mysql_select_db($dbname) or DIE('Database name is not available!');


$sql = "INSERT INTO `contact_us`(`userid`, `username`, `address`, `city`, `states`, `postalcode`, `phone`, `email`, `country`)
    VALUES ('','$_POST[Name]','$_POST[Address]','$_POST[City]','$_POST[State]','$_POST[Zipcode]','$_POST[Phone]','$_POST[Email]','$_POST[Country]')";
if (!mysql_query($sql, $con)) {
    die('Error: ' . mysql_error());
}
mysql_close($con);
header('Location: saved_successful.php');
?>
