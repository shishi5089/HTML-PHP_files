<?php include"header.php" ?>
<body>
        <div class="container">
		
	<div class="col-sm-6" style="background:#FFFFFF; opacity:0.8;"> 
	<a href="forgot.php"><i class="fa fa-arrow-circle-left"></i>Go Back</a> 
	<h3 style="font-family:'Lucida Calligraphy'; color:#FF3F00" 
	align="center">Create new Password</h3> 
	
	<form action="new_password_reset.php" method="post" id="fileForm" role="form">
        <div class="col-md-6">
<div class="form-group">
   <label for="email"><span class="req">* </span> 
   Email Address: </label> 
   <input class="form-control" required type="text" name="email"
    id = "email"  onchange="email_validate(this.value);" />   
                        <div class="status" id="status"></div>
            </div>
            <div class="form-group">
  <label for="password"><span class="req">* 
  </span> New Password: </label>
  <input required name="password" type="password" 
  class="form-control inputpass" minlength="4" maxlength="16"
    id="pass1" /> </p>

   <label for="password"><span class="req">*
    </span> Password Confirm: </label>
    <input required name="password" type="password" 
	class="form-control inputpass" minlength="4" maxlength="16"
	 placeholder="Enter again to validate"  id="pass2" 
	 onKeyUp="checkPass(); return false;" />
         <span id="confirmMessage" class="confirmMessage"></span>
            </div>

            <div class="form-group">
            <?php //$date_entered = date('m/d/Y H:i:s'); ?>
      <input type="hidden" value="<?php //echo $date_entered; ?>" 
	  name="dateregistered">
                <input type="hidden" value="0" name="activate" />
                <hr>
            <div class="form-group">
  <input class="btn btn-success" type="submit" name="submit_reg" 
  value="Register">
            </div>
             </fieldset>
            </form><!-- ends register form -->
            </div>
			
	</div>

       