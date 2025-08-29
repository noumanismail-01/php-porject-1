<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$db = "myweb_db";
$conn = mysqli_connect($hostname,$username,$password,$db) or die("Connection Error " . mysqli_connect_error())
?>