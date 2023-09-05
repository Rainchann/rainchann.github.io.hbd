<?php
	
        $my_username = $_POST["my_username"];
        $my_password = $_POST["my_password"];
        $my_sentence = $_POST["my_sentence"];

	// Database connection
	// $conn = new mysqli('localhost','id19413471_rain','k5V-HwM$?&+N-<g}','id19413471_diary');
	$conn = new mysqli('localhost','root','d.ZljYqU15vUK49p','diary');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO user_info (username, password, sentence) VALUES (?, ?, ?)");
		$stmt->bind_param('sss', $my_username, $my_password, $my_sentence);
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
		header("Location: ./login.html");
		exit();
	}
?>