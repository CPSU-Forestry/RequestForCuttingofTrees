<?php

$servername = "localhost";

$username = "root";

$password = "";

$db = "cpsu_request_app";


$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn){
	echo "Not Connected to Database";
}

?>