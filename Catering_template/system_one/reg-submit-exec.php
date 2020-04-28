<?php
require ("db_con.php");
//Insert Member
if(isset($_POST['submit_reg'])){
	
	$firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$lastname = filter_var($_POST['lastname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$email = filter_var($_POST['email'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$phone = filter_var($_POST['phonenumber'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$username = filter_var($_POST['username'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$pass=md5($password);

	//see if that member is an identical match to another in the system
	 $sql = mysqli_query($link,"SELECT email FROM users WHERE email='".$email."'  LIMIT 1");
	$data_match=mysqli_num_rows($sql);//count the output
	
	if($data_match>0){
	
	echo "<script>
	if(confirm('User with that email already
	 exists. try registering new user with new email')){
		window.location = './signup.php';
	}
	</script>";
	
		//header('location:signup.php?duplicate');
		//exit();
		
	
	

		}
		
	
	else{
		$sql = mysqli_query($link,"INSERT INTO users(firstname,lastname,email,phone,username,password,location,reg_date,status) VALUES ('".$firstname."','".$lastname."','".$email."','".$phone."','".$username."','".$password."','uploads/default.jpg',now(),0)") or die (mysqli_error());
		
		
		header('location:index.php?success');
		
		exit();	}
					
	}



?>