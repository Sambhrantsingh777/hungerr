<?php
	$db_ini = parse_ini_file("db.ini");
	session_start();
	$_SESSION["Id"] = $_POST["id"];
	$_SESSION["Name"] = $_POST["name"];
	$_SESSION["Email"] = $_POST["email"];
	$_POST["name"] = mysqli_real_escape_string($con, $_POST["name"]);
	$_POST["email"] = mysqli_real_escape_string($con, $_POST["email"]);
	$_POST["id"] = mysqli_real_escape_string($con, $_POST["id"]);
	$mysqli = new mysqli($db_ini["host"], $db_ini["username"], $db_ini["password"], $db_ini["database"]);


	$sql = "SELECT * FROM google_users WHERE email='".$_POST["email"]."'";
	$result = $mysqli->query($sql);


	if(!empty($result->fetch_assoc())){
		$sql2 = "UPDATE google_users SET google_id='".$_POST["id"]."' WHERE email='".$_POST["email"]."'";
	}else{
		$sql2 = "INSERT INTO google_users (name, email, google_id) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["id"]."')";
	}
	$mysqli->query($sql2);
	echo ("DONE");
?>
