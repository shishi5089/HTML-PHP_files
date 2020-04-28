
<?php include"header.php" ?>
 <body role="login">
    <section class="section">
	<div class="container" style="margin-top:70px">
        <div class="row">
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="panel panel-default">
    
      <div class="panel-body">
        <form role="form" action="login-exec.php" method="POST">
          <fieldset>
            <div class="row">
   <div class="center-block" style="font-family:'Lucida Calligraphy';
    color:#FF3F00;">  <h3>Student File Sharing System</h3></div>
	<h5  style="color:#000000;">Are you are member? Log in Below.</h5><br>
	<h5  style="color:#000000;">Want to Register?<a href="signup.php"> Click here to  signup</a></h5>
              <hr>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                <div class="form-group">
                <label>Username:</label>
          <div class="input-group"> <span class="input-group-addon">
		   <i class="glyphicon glyphicon-user"></i> </span>
       <input class="form-control" placeholder="email"  name="email" type="text" autofocus>
                  </div>
                </div>
                <div class="form-group">
                 <label>Password:</label>
   <div class="input-group"> <span class="input-group-addon"> 
   <i class="glyphicon glyphicon-lock"></i> </span>
   <input class="form-control" placeholder="Password"   name="password" type="password" value="">
                  </div>
                </div>
               
                <div class="form-group">
                
				   <br><input type="submit" class="btn btn-success" name="login" value="Log In">&nbsp;
	<br><br>
	
                </div>
               
              </div>
            </div>
           
          </fieldset>
        </form>
   <h5  style="color:#000000;" align="center"> Forgot Password?<a href="forgot.php"> Click here to reset</a></h5>
      </div>
    </div>
  </div>
</div>

    </section>
	<?php include"footer.php" ?>
    