<?php
//start session
session_start();
include 'dbConnect.php';
if (isset($_POST['submit'])) {
	//capture form data
	$title = mysqli_real_escape_string($conn,$_POST['title']);
	$description = mysqli_real_escape_string($conn,$_POST['description']);

	//upload image
	$folder="assets/img/";
	$fileName= $folder.basename($_FILES['image']['name']);
	$fileExt = pathinfo($fileName,PATHINFO_EXTENSION);
	//validate for images
	if ($fileExt != 'png' && $fileExt != 'jpg' && $fileExt != 'JPG' && $fileExt != 'jpeg' && $fileExt != 'pgf') {
		//error
		$_SESSION['error']='Invalid file format. Only png, jpg, jpeg or pdf formats are allowed. Please try again';
		header('Location:index.php');
		return;
	}

	$sql = "INSERT INTO updates(title, description, image) VALUES('$title','$description','$fileName') ";
	$query = mysqli_query($conn, $sql);
	//check if insert
	if ($query) {
		//try upload
		move_uploaded_file($_FILES['image']['tmp_name'] , "../".$fileName);
		//success
		$_SESSION['success']='Your update was successfully added';
		header('Location:index.php');
	}else{
		//error
		$_SESSION['error']='Unable to add your update.Please try again';
		header('Location:index.php');
	}
}
?>