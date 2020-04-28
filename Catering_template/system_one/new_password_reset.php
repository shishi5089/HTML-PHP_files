<?php
require ("db_con.php");
//Insert Member
if(isset($_POST['submit_reg'])){
	
	
	$email = filter_var($_POST['email'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	
	$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);


	//see if that member is an identical match to another in the system
	 $sql = mysqli_query($link,"UPDATE users set password='".$password."' WHERE email='".$email."'  LIMIT 1");

	
	echo "<script>
	if(confirm('Password updated successfully')){
		window.location = './index.php';
	}
	</script>";
	
	}
		
	



?>