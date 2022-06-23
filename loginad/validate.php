<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$adminname = test_input($_POST["adminname"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM adminlogin");
	$stmt->execute();
	$users = $stmt->fetchAll();
	$flag = 0;
	
	foreach($users as $user) {
		
		if(($user['adminname'] == $adminname) &&
			($user['password'] == $password)) {
				header("Location: re.php");
				$flag = 1;
		}
		
	}
	
	
	if($flag == 0){
	echo "<script language='javascript'>";
	//echo "alert('')";
	echo "if(!alert('WRONG INFORMATION PLEASE ENTER CORRECT CREDENTIALS')) document.location = 'index.php'";
	echo "</script>";
	$flag = 2;
	}
	
	
	
	die();
	
}

?>
