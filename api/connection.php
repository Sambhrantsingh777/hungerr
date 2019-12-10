<?php

$db_ini = parse_ini_file("db.ini");
$conn = mysqli_connect($db_ini["host"], $db_ini["username"], $db_ini["password"], $db_ini["database"]) or die("Connection failed: " . mysqli_connect_error());

?>