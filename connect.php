<?php
// DataBase Connection
$user = 'Herbert';
$pass =	'holder';
$db =	'csc350';
$dbc = mysqli_connect ('localhost', $user , $pass,$db) or die("Unable to connect");
echo "great work";
?>