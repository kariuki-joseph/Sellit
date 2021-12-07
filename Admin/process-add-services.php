<?php
//start session
session_start();
include 'dbConnect.php';
if (isset($_POST['submit'])) {
	//capture form data
	$title = mysqli_real_escape_string($conn,$_POST['service_title']);
	$description = mysqli_real_escape_string($conn,$_POST['sevice_description']);
	$sql = "INSERT INTO services(title,description) VALUES('$title','$description')";
	$query=mysqli_query($conn, $sql);
	//check if insert
	if ($query) {
		//success
		$_SESSION['success']='Your service was added successfully.';
		header('Location:index.php');
	}else{
		//error
		$_SESSION['error']='Unable to add the service. Please try again';
		header('Location:index.php');
	}
}
?>