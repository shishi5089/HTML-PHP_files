<?php include "header.php"?>
<?php include "nav.php"?>
<div class="container">
  <!-- Add this css File in head tag-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">


 <!--  
        If you want to change #bootstrap-touch-slider id then you have to change Carousel-indicators and Carousel-Control  #bootstrap-touch-slider slide as well
        Slide effect: slide, fade
        Text Align: slide_style_center, slide_style_left, slide_style_right
        Add Text Animation: https://daneden.github.io/animate.css/
        -->


        <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- Third Slide -->
                <div class="item active">

                    <!-- Slide Background -->
                    <img src="images/eng3.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_left">
                                <h1 data-animation="animated zoomInRight" style="font-family:Forte; color:#330000">Engineering is our passion</h1>
                                <p data-animation="animated fadeInLeft" style="font-family:Georgia Pro Cond Black; color:#999999;">We offer jobs to the most dedicated engineers worldwide</p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Second Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="images/eng2.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 data-animation="animated flipInX"  style="font-family:Forte; color:#330000">Do you have what it takes?</h1>
                        <p data-animation="animated lightSpeedIn" style="font-family:Georgia Pro Cond Black; color:#999999;">Take a risk to build a greater future</p>
 
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="images/eng4.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_right">
                        <h1 data-animation="animated zoomInLeft"  style="font-family:Forte; color:#330000">Hardwork is our motto</h1>
                        <p data-animation="animated fadeInRight" style="font-family:Georgia Pro Cond Black; color:#999999;">Apply to get a chance to work for us </p>
 
                    </div>
                </div>
                <!-- End of Slide -->


            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- End  bootstrap-touch-slider Slider -->
        
        
  <div class="row">
    <h2>What is Kaptaa Engineers Inc.</h2>

   
    <hr>
    <section id="pinBoot">

      <article class="white-panel"><img src="images/home3.jpg" alt="">
        <h4><a href="#">Learning</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </article>

      <article class="white-panel"> <img src="images/home4.jpg" alt="">
        <h4><a href="#">Training</a></h4>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </article>

      <article class="white-panel"> <img src="images/home5.jpg" alt="">
        <h4><a href="#">Business</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </article>


      <article class="white-panel"> <img src="images/home6.jpg" alt="">
        <h4><a href="#">Development</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </article>

      <article class="white-panel"> <img src="images/home7.jpg" alt="">
        <h4><a href="#">Growth</a></h4>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </article>

      <article class="white-panel"> <img src="images/home8.png" alt="">
        <h4><a href="#">Responsibilities</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </article>



      <article class="white-panel"><img src="images/home9.jpg" alt="">
        <h4><a href="#">Workmanship</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </article>

      <article class="white-panel"> <img src="images/home10.jpg" alt="">
        <h4><a href="#">Unity</a></h4>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </article>

    </section>


    <hr>


  </div>
  

</div>
        
     
	
		






<?php include"footer.php"?>
	