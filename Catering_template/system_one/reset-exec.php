<?php 
include_once("db_con.php");
session_start();
global $link;
//Parse the log in form if the user has filled it out and pressed "Log in"
if(isset($_POST["login"])){
	
	$username = filter_var($_POST["username"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$email= filter_var($_POST["email"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	
	

$sql= mysqli_query($link, "SELECT * FROM users WHERE email='".$email."' AND username='".$username."' LIMIT 1") or die (mysqli_error());
//Make  sure the person exists
$count=mysqli_num_rows($sql);
$row = mysqli_fetch_array($sql);
if($count > 0){


header("location: newpassword.php");


}	else{
		echo "<script>
	if(confirm('The details provided are not correct ! enter the correct username and email or contact admin for assistance')){
		window.location = './forgot.php';
	}
	</script>";
}

}

?>