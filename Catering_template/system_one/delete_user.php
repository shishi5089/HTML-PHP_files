<?php
error_reporting(0);
include('db_con.php');
mysqli_query("DELETE FROM `epem`.`tbl_employee` WHERE  emp_id='$_GET[id]'");
header("location:home.php");
?>