<?php include "header.php"?>
<?php include "nav.php"?>
<div id="background-carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image:url(http://lorempixel.com/1200/800/food/1/)"></div>
        <div class="item" style="background-image:url(http://lorempixel.com/1200/800/food/2/)"></div>
        <div class="item" style="background-image:url(http://lorempixel.com/1200/800/food/4/)"></div>  
      </div>
    </div>
</div>
 
 
<div id="content-wrapper">
<!-- PAGE CONTENT -->
    <div class="container">
        <div class="page-header"><p class="title"></p></div>
  <!-- End Well -->
    </div><!-- End Container -->
<!-- PAGE CONTENT -->
</div>

 <div id="wrapper" data-spy="scroll" data-target="#spy" class="">
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="">
        <nav id="spy">
            <ul class="sidebar-nav nav">
                <li class="sidebar-brand active"> <a href="#home" class=""><span class="fa fa-home solo">Home</span></a>

                </li>
                <li class=""> <a href="#anch1" data-scroll="" class="">
                            <span class="fa fa-anchor solo">About Us</span>
                        </a>

                </li>
                <li class=""> <a href="#anch2" data-scroll="" class="">
                            <span class="fa fa-anchor solo">Contact Us</span>
                        </a>

                </li>
                <li class=""> <a href="#anch3" data-scroll="" class="">
                            <span class="fa fa-anchor solo">Log In</span>
                        </a>

                </li>
                <li class=""> <a href="#anch4" data-scroll="" class="">
                            <span class="fa fa-anchor solo">Services</span>
                        </a>

                </li>
            </ul>
        </nav>
    </div>
    <!-- Page content -->
    <div id="page-content-wrapper" class="">
        <div class="content-header">
             <h1 id="home" class="" style="font-family:Algerian;">
                    <a id="menu-toggle" href="#" class="btn btn-menu btn-lg toggle">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </a>
                    Haprice Hotel Catering
                </h1>

        </div>
        <div class="page-content inset">
            <div class="row">
                <div class="jumbotron text-center">
                     <h1 class="" style="font-family:Curlz MT; color:#330033;">Welcome to our Services</h1>

                    <p class="" style="font-family:Comic Sans MS;">This is a catering business that offers highly expertise training
					to many individuals all over the world with a desire of cooking. We also offer services to customers
					by offering our meals at very convenient prices,All are welcome to join this business. To join us please contact us as soon
					as possible. Remember we love work....We love you!</p>
    
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 well">
                    <legend id="anch1" class="" style="font-family:Curlz MT;">About Us</legend>
                    <p class="" style="font-family:Comic Sans MS;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies,
                        metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque
                        ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla
                        enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna
                        ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas
                        in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit
                        amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis.
                        Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate
                        felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim
                        varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet
                        ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui.
                        Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu
                        tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt
                        nisi. Nam consectetur velit ac pharetra venenatis.</p>
                    <p class="">Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus,
                        eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit
                        luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam
                        euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante
                        vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque
                        condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus
                        a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor,
                        mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit
                        amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim
                        fringilla. In ac erat non magna accumsan aliquam.</p>
                </div>
                <div class="container">
				  <legend id="anch2" class="" style="font-family:Curlz MT;">Contact Us</legend>
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Contact us</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
            <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
						     <legend id="anch3" class="" style="font-family:Curlz MT;">Login</legend>
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="http://phpoll.com/login/process" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
                <div class="col-md-12 well">
                    <legend id="anch4" class="" style="font-family:Curlz MT;">Services</legend>
                    <p class="" style="font-family:Comic Sans MS;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies,
                        metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque
                        ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla
                        enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna
                        ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas
                        in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit
                        amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis.
                        Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate
                        felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim
                        varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet
                        ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui.
                        Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu
                        tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt
                        nisi. Nam consectetur velit ac pharetra venenatis.</p>
                    <p class="">Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus,
                        eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit
                        luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam
                        euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante
                        vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque
                        condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus
                        a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor,
                        mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit
                        amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim
                        fringilla. In ac erat non magna accumsan aliquam.</p>
                </div>
            </div>
            <div class="navbar navbar-default navbar-static-bottom">
                <p class="navbar-text pull-left">Built by <a href="#" target="_blank" class="">Sheila Nangila
                    </a>
                </p><a href="#" target="_blank" class="">
                </a>
            </div><a href="#" target="_blank" class="">
            </a>
        </div><a href="#" target="_blank" class="">

        </a>
    </div><a href="#" target="_blank" class="">

    </a>
</div>
		






<?php include"footer.php"?>