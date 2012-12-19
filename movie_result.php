<?php

$hostname = 'localhost';
$dbname = 'survey';
$username = 'root';
$password = '';

$con = mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');

mysql_select_db($dbname) or DIE('Database name is not available!');


$sql = "INSERT INTO `movie_survey`(`userid`, `Movie_Frequency`, `AllFilms`, `Action`, `Adventure`, `Childrens`, `Comedy`, `Documentary`, `Drama`, `Family`, `Horror`, `Romance`, `Fiction`, `Thriller`, `Movies`) 
VALUES ('','$_POST[Movie_Frequency]','$_POST[Favorie_Movie_All]','$_POST[Favorie_Movie_Action]','$_POST[Favorie_Movie_Adventure]','$_POST[Favorie_Movie_Childrens]','$_POST[Favorie_Movie_Comedy]','$_POST[Favorie_Movie_Documentary]','$_POST[Favorie_Movie_Drama]','$_POST[Favorie_Movie_Family]','$_POST[Favorie_Movie_Horror]','$_POST[Favorie_Movie_Romance]','$_POST[Favorie_Movie_Science_Fiction]','$_POST[Favorie_Movie_Thriller]','$_POST[Contact_Me_About_Movies]')";

if (!mysql_query($sql, $con)) {
    die('Error: ' . mysql_error());
}
mysql_close($con);
header('Location: saved_successful.php');
?>
