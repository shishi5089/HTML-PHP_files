<?php include"session.php"; ?>
<?php include"header.php"; ?>
  <?php include"fetch-records.php"; ?>
  
<?php include"nav.php" ?>
    <div class="container-fluid">
	<?php include"sidebar.php";?>
      <div class="row">
       
	  <?php include "analysis.php"; ?>
	  </div>
   <div class="col-sm-9 col-sm-offset-3 col-md-10 
   col-md-offset-2 main" style="background-color:#FFFFFF; 
   opacity:0.8;">
          <h1 class="page-header">Dashboard</h1>
		  

<?php echo analytics(); ?>

	</div>
												   
 <?php include"footer.php" ?>
