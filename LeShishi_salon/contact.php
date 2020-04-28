<?php include "header.php"?>
<?php include "nav.php"?>
<div class="container">



	<div class="col-sm-6" style="margin-left:200px;">
		<h3 class="title" style="text-align:center">Send Enquiry</h3>
	<form action ="send_enquiry.php" method="post">
		<div class="form-group">
		<label>Full Name</label>
		<input name="name" type="text" class="form-control" placeholder="Name">
	</div>
	<div class="form-group">
		<label>Email Address</label>
		<input name="email" type="email" class="form-control" placeholder="Email">
		</div>
	<div class="form-group">
		<label>Phone Number</label>
		<input name="phone" type="text" class="form-control" placeholder="Mobile Phone">
		</div>
	<div class="form-group">
		<label>Message</label>
		<textarea name="message" class="form-control" placeholder="Message"></textarea>
		</div> 
		<button name="send_enquiry" type="submit" class="btn btn-warning">Submit</button>
		<button type="submit" class="btn btn-info" data-dismiss="modal">Close</button>
		<br/>
		<br/>
		
	</form>
	</div>
		</div>
		<?php include"footer.php" ?>
		
		