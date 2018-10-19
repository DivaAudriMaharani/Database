<?php
$servername = 'localhost';
$username ='root';
$password = '';
$database = 'php_api';
$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die("Connection Failed: ". $conn->connect_error);
}
echo "Connection Succes";
?>