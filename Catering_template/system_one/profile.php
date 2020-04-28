<?php include"header.php" ?>
  <?php include"fetch-records.php" ?>
  <?php include"session.php"; ?>
<?php include"nav.php" ?>
    <div class="container-fluid">
      <div class="row">
       <?php include"sidebar.php";
	   ?><div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="background-color:#FFFFFF; opacity:0.8;">
      <?php $query= mysqli_query($link,"select * from members where user_id = '$session_id'")or die(mysqli_error());
		 
								while ($row = mysqli_fetch_array($query)) {
					$id = $row['user_id'];
						?>
						
						
  <h1 class="page-header">Your Profile</h1>
  <div class="row">
    <!-- left column -->

    <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="photo" style="float:left; width:20%;">
        <img src="<?php echo $row['location']; ?>" alt="avatar" width="250" height="190">
        
     
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a> 
        <i class="fa fa-coffee"></i>
        This is an <strong>.alert</strong>. Use this to show important messages to the user.
      </div>
      <h3>Personal info</h3>
      <form class="form-horizontal"  method="post" action="newmember.php<?php echo '?id='.$id; ?>"role="form">
        <div class="form-group">
          <label class="col-lg-3 control-label">First name: &nbsp;</label>
          <div class="col-lg-8">
           <?php echo $row['firstname']; ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name: &nbsp;</label>
          <div class="col-lg-8">
            <?php echo $row['lastname']; ?>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-lg-3 control-label">Email: &nbsp;</label>
          <div class="col-lg-8">
            <?php echo $row['email']; ?>
          </div>
        </div>
		  <div class="form-group">
          <label class="col-lg-3 control-label">Phone: &nbsp;</label>
          <div class="col-lg-8">
            <?php echo $row['phone']; ?>
          </div>
        </div>
      
       <div class="btn" align="center" style="float:right; margin-right:20px;"><button class="btn btn-success" type="submit" name="submit"  style="background:#7F0000; border-radius:8px; color:#FFFFFF; "> Edit Profile</button></div>
     
        </div>
      </form>
	  <?php } ?>
	  
    </div>
  </div>
</div>

 <?php include"footer.php" ?>
