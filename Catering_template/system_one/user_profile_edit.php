<?php include"header.php" ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
  <?php include"fetch-records.php" ?>
  
<?php include"nav.php" ?>
    <div class="container-fluid">
      <div class="row">
       <?php include"sidebar.php";
	   ?><div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="background-color:#FFFFFF; opacity:0.8;">
      <?php $query= mysqli_query($link,"select * from members where user_id ='".$get_id."' ")or die(mysqli_error());
		  $session_id=1;
								while ($row = mysqli_fetch_array($query)) {
					$id = $row['user_id'];
						?>
						
						
  <h1 class="page-header">Your Profile</h1>
  <div class="row">
  <form method="post" action="student_avatar.php<?php echo '?id='.$id; ?>" enctype="multipart/form-data">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
         <img src="<?php echo $row['location']; ?>" alt="avatar" width="250" height="250">
        <h6>Upload a different photo...</h6>
       <input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
		<button class="btn btn-info" type="submit" name="change"><i class="icon-save icon-large"></i> Upload</button>
      </div>
    </div>
    <!-- edit form column -->
	</form>
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a> 
        <i class="fa fa-coffee"></i>
        This is an <strong>.alert</strong>. Use this to show important messages to the user.
      </div>
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form">
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
          <label class="col-lg-3 control-label">Email: </label>
          <div class="col-lg-8">
            <?php echo $row['email']; ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Time Zone:</label>
          <div class="col-lg-8">
            <div class="ui-select">
              <select id="user_time_zone" class="form-control">
                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                <option value="Alaska">(GMT-09:00) Alaska</option>
                <option value="Pacific Time (US & Canada)">(GMT-08:00) Pacific Time (US & Canada)</option>
                <option value="Arizona">(GMT-07:00) Arizona</option>
                <option value="Mountain Time (US & Canada)">(GMT-07:00) Mountain Time (US & Canada)</option>
                <option value="Central Time (US & Canada)" selected="selected">(GMT-06:00) Central Time (US & Canada)</option>
                <option value="Eastern Time (US & Canada)">(GMT-05:00) Eastern Time (US & Canada)</option>
                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <div class="col-md-8">
            <input class="form-control" value="janeuser" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control" value="11111122333" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" value="11111122333" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="Save Changes" type="button">
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
      </form>
	  <?php } ?>
    </div>
  </div>
</div>

 <?php include"footer.php" ?>
