<?php
$user = 'Herbert';
$pass =	'holder';
$db =	'csc350';

$dbc = mysqli_connect ('localhost', $user , $pass,$db) or die("Unable to connect");

echo "great work";

// $servername = "localhost";
// $username = "Herbert";
// $password = "holder";
// $dbname = "csc350";

// // Create connection
// $conn = mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO buyer (
// // 		firstname,
// // 		lastname,
// // 		address,
// // 		email,
// // 		username,
// // 		password )
// VALUES ('', '', '')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();





?>