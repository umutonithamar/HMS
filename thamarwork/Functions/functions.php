<?php
//including the connection to the database
$con=mysqli_connect("localhost", "root", "", "kgcoach");
	
	//a method for sending message to the the database


	
		if(isset($_POST['sendNow'])){
			$username =$_POST['username'];
			$email =$_POST['email'];
			$tel =$_POST['tel'];
			$message =$_POST['message'];

			//mysql statement
			$stmt = "INSERT INTO contact (username, email, tel, message) VALUES ('$username', '$email', '$tel', '$message')";
			//For executing the mysql query
			$sql_query = mysqli_query($con, $stmt);

			//checking whether the insert is succesful or not
			if($sql_query){
				$message = "Message Succesfully Send";
			}else{
				$message= "Message Send Faild!! Please try again";
			}

			echo $message;
		}

?>