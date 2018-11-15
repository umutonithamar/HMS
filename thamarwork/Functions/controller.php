<?php
include 'functions.php';
include 'db.php';
	if(isset($_POST['sendNow'])){
		$username =$_POST['username'];
		$email =$_POST['email'];
		$tel =$_POST['tel'];
		$message =$_POST['message'];

		sendMessage($username, $email, $tel, $message);
	}
?>