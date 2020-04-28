
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" style="
	 background:#009FAA;">
      <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" 
	 data-toggle="collapse" data-target="#navbar"
		  aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <h3 align="center">  <a class="navbar-brand" href="#"
		  style="color:#FF0000; font-family:'Lucida Calligraphy';">
		Student File Sharing System</a></h3>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
		  <?php $query= mysqli_query($link,"select * from users where user_id = 1")or die(mysqli_error());
		  $session_id=1;
								$row = mysqli_fetch_array($query);
						?>
		 
            <li ><a href="#" style="color:#FFFFFF"> Welcome  <?php echo $row['username']; ?></a></li>
            
            <li ><a href="profile.php" style="color:#FFFFFF">Profile</a></li>
			<li><a href="logout.php" style="color:#FFFFFF">Log out</a></li>
            
          </ul>
          
        </div>
      </div>
    </nav>