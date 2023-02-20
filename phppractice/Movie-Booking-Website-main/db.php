<?php
/*if (!session_id()) {
	# code...
	session_start();
}*/

$host="localhost";
$username="root";
$password="";
$db_name="iwp";
// Create connection
$db = new mysqli($host, $username, $password,$db_name);
// Check connection
if (mysqli_connect_errno()) {
	die("Connection failed: " . mysqli_connect_error());
} else{

}
?>