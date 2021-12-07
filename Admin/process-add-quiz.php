<?php
//start session
session_start();
//db connection
include 'dbConnect.php';
if (isset($_POST['submit'])) {
	//capture form data
	$question = mysqli_real_escape_string($conn,$_POST['question']);
	$answer = mysqli_real_escape_string($conn,$_POST['answer']);
	//submit
	$sql ="INSERT INTO faq(question,answer) VALUES('$question','$answer')";
	$query = mysqli_query($conn,$sql);

	//check if insert
	if ($query) {
		//success
		$_SESSION['success']='Question added successfully.';
		header('Location:index.php');
	}else{
		//error
		$_SESSION['error']='Unable to add your question. Please try again';
		header('Location:index.php');
	}
}
?>