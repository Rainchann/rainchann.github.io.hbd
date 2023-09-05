<?php
 	// require_once 'google-api-php-client/src/Google/autoload.php';
    // if( isset( $my_title ) || isset( $my_content ) || isset( $diary_year ) || isset( $diary_month ) || isset( $diary_day )) {
        $my_title = $_POST["my_title"];
        $my_content = $_POST["my_content"];
		$my_datetime = $_POST["my_datetime"];
		$my_username = $_POST["my_username"];
		// $diary_month = $_POST["diary_month"];
		// $diary_day = $_POST["diary_day"];
        // $year = '';
        // $month = '';
        // $day = '';
        // }

	// Database connection
	// $conn = new mysqli('localhost','id19413471_rain','k5V-HwM$?&+N-<g}','id19413471_diary');
	$conn = new mysqli('localhost','root','d.ZljYqU15vUK49p','diary');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO diary_base (title, content, datetime, username) VALUES (?, ?, ?, ?)");
		$stmt->bind_param('ssss', $my_title, $my_content, $my_datetime, $my_username );
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
		header("Location: ./diary.html");
		exit();
	}
?>