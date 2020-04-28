
<?php include"header.php" ?>
 <body role="login">
    <section class="section">
	<div class="container" style="margin-top:70px">
        <div class="row">
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="panel panel-default">
    
      <div class="panel-body">
        <form role="form" action="reset-exec.php" method="POST">
          <fieldset>
            <div class="row">
   <div class="center-block" style="font-family:'Lucida Calligraphy';
    color:#FF3F00;">  <h3>Forgot Password</h3></div>
	<h5  style="color:#000000;">Fill your details to Reset Password</h5><br>
	
              <hr>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                <div class="form-group">
                <label>Username:</label>
          <div class="input-group"> <span class="input-group-addon">
		   <i class="glyphicon glyphicon-user"></i> </span>
       <input class="form-control" placeholder="username"  name="username" type="text" autofocus>
                  </div>
                </div>
                <div class="form-group">
                 <label>Email</label>
   <div class="input-group"> <span class="input-group-addon"> 
   <i class="glyphicon glyphicon-lock"></i> </span>
   <input class="form-control" placeholder="email"  name="email" type="text" autofocus>
                  </div>
                </div>
               
                <div class="form-group">
                
				   <br><input type="submit" class="btn btn-success" name="login" value="Reset">&nbsp;
	<br><br>
	
                </div>
               
              </div>
            </div>
           
          </fieldset>
        </form>
    
      </div>
    </div>
  </div>
</div>

    </section>
	<?php include"footer.php" ?>
    