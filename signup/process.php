<?php
//First-name,Last-name,Email,Grade-Lvl,Cell-phone,Parent-Email,Hash,,Design,Writing,Marketing,Engineering,Programming,WebDesign,Other,m=0x7F&
function create_query()
{
	
	if($_GET['m'] === "0x7F")
	{
		$query = "INSERT INTO `users` (first_name, last_name, email, password, stu_grade, stu_parentemail,  cellphone) VALUES ('".$_POST['First-name']."','".$_POST['Last-name']."','".$_POST['Email']."','".$_POST['Hash']."','".$_POST['Grade-Lvl']."','".$_POST['Parent-Email']."','".$_POST['Cell-phone']."')";
	}
	elseif($_GET['m'] == "0x3D")
	{
		$query = "SELECT `first_name` FROM `users` WHERE `last_name`!='Ugolini'";
	}
}
//$NewURL = "[mysqlserver]";
//$Srvrresp = null;

// CONNECT TO THE DATABASE

if(isset($_POST))
	{
		create_query();
	}
	else
	{
	echo("no method specified");
	exit();
	}


	$DB_NAME = '';
	$DB_HOST = '';
	$DB_USER = '';
	$DB_PASS = '';
	
	$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

// A QUICK QUERY ON A FAKE USER TABLE
	
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

// GOING THROUGH THE DATA
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo stripslashes($row['first_name']);	
		}
	}
	else {
		echo 'NO RESULTS';	
	}
	
// CLOSE CONNECTION
	mysqli_close($mysqli);
	

?>
