<?php
$dbname = "joytoys_db";
$dbhost = "localhost";
$dbuser = "root";
$dbpwd = "";
$conn = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
