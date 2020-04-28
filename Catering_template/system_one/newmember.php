
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<?php
require ("db_con.php");

//Insert Member
if(isset($_POST['submit'])){
	
	$sql= mysqli_query
($link, "SELECT * FROM members WHERE user_id='".$get_id."' LIMIT 1") 
or die (mysqli_error());

//Make  sure the person exists
$count=mysqli_num_rows($sql);
$row = mysqli_fetch_array($sql);
if($count > 0){
	$id=$row['user_id'];
	
		header('location:user_profile_edit.php?id='.$id);


}	else{
	
	
	$sql= mysqli_query
($link, "SELECT * FROM users WHERE user_id='".$get_id."'  LIMIT 1") 
or die (mysqli_error());
$row = mysqli_fetch_array($sql);
	
$id=$row['user_id'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$email=$row['email'];
$phone=$row['phone'];
$location=$row['location'];

		$sql = mysqli_query($link,"INSERT INTO members(user_id,firstname,lastname,email,phone,location) VALUES ('".$id."','".$firstname."','".$lastname."','".$email."','".$phone."','".$location."')") or die (mysqli_error());
		
		
		header('location:user_profile_edit.php?id='.$id);
		
		exit();	}
					
	}



?>