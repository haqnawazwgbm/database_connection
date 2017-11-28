<?php
	require_once('config/connection.php');
	extract($_POST);
	$sql = "INSERT INTO post (company_name, location, payment_gatway, status)
	VALUES ('$company_name', '$location', '$payment_gatway', 1)";

	if ($conn->query($sql) === TRUE) {
	    echo 'Record inserted successfully.';
	} else {
	    echo 'Something went wrong. Please try again.';
	}

	$conn->close();
	exit;
?>