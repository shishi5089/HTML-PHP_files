<?php
		include('admin/dbcon.php');
		session_start();
		//Parse the log in form if the user has filled it out and pressed "Log in"
if(isset($_POST["login"])){
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		/* student */
			$query = "SELECT * FROM students WHERE username='$username' AND password='$password'";
			$result = mysql_query($query)or die(mysql_error());
			$row = mysql_fetch_array($result);
			$num_row = mysql_num_rows($result);
			$status = $row['status'];

		if( $num_row > 0 && $status == 'Activated') { 
		$_SESSION['id']=$row['reg_id'];
		echo 'true_student';
		mysql_query("insert into student_log (username,login_date,user_id)values('$username',NOW(),".$row['reg_id'].")")or die(mysql_error());
		header('location: student/dashboard_student.php');
		
		exit();		
		}
		
		else if( $num_row > 0 && $status == 'New') { 
		$_SESSION['id']=$row['reg_id'];
		echo 'true_student';
		header('location: activate.php');
		
		exit();		}
		
		else if( $num_row > 0 && $status == 'De-activated') { 
		$_SESSION['id']=$row['reg_id'];
		echo 'true_student';
		header('location: notactive.php');
		
		exit();		}
		
		else{ 
				header("location: user_login.php?login-error");
		}	
				
	}
		?>