<?php
session_start();
$yes_no='no';
if(isset($_SESSION['id']) !== false){
    $yes_no='yes';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>CloudChain</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Didactic a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" /><!-- gallery css file -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="w3layouts-banner">
<div class="container">
<nav class="navbar navbar-default">
 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h1><a class="navbar-brand" href="#">CLOUDCHAIN</a></h1>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#index.html" class="page-scroll">Home</a></li>
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Services</a></li>
		<li><a href="#team" class="page-scroll">Team</a></li>
<!--		<li><a href="#gallery" class="page-scroll">Gallery</a></li>-->
          <li><a href="#contact" class="page-scroll">Contact</a></li>
          <?php
          if($yes_no='yes' && isset($_SESSION['id'])){
              echo '<li><a href="userfiles.php" class="page-scroll">Upload/Download</a></li>';
          }
          ?>
          <?php
              if($yes_no='yes' && isset($_SESSION['id'])){
                  echo '<li><a href="logout.php"><strong>Hi, '.$_SESSION['uname'].'</strong></a></li>';
              }else{
                  echo '<li><a href="login.php">Login/Signup</a></li>';
              }
          ?>
      </ul>
     
        </div><!-- /.navbar-collapse -->
  
</nav>
		<div class="w3l_banner_info">
		
				<section class="slider">
					<div class="flexslider">
				
						<ul class="slides">
							<li>
								<div class="wthree_banner_info_grid">
									<h3>Safe</h3>
									<p>Rest assured your data will be safe,protected and unchanged</p>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h3>Secure</h3>
									<p>We take security very seriously and have in place top level security checks so that your data is never out of reach</p>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h3>Decentralized</h3>
									<p>Unlike most Cloud Storage our network is decentralized meaning all your data is not in the same place but easily accessible by you from anywhere</p>
								</div>
							</li>
						</ul>
					</div>
				</section>
					
					
			</div>	
				
	</div>
</div>
<!-- //banner -->

<!-- About Us -->
<div class="aboutus" id="about">
<div class="container">
<h3>About Us</h3>
<p class="w3_dwn">We are group of developers who were joined together to do a class project on BlockChain.</p>
<div class="w3l_abtdwn">
<div class="col-md-4 w3l_r1">
<i class="fa fa-crosshairs" aria-hidden="true"></i>
<h4>Our Mission</h4>
<p class="agile_pgh">To pass Software Engineering Class.</p>
</div>
<div class="col-md-4 w3l_c1">
<i class="fa fa-eye" aria-hidden="true"></i>
<h4>Our Vision</h4>
<p class="agile_pgh">If things go well and we're still together doing this project, then maybe you might have a new place to store your data in the near future. </p>
</div>
<div class="col-md-4 w3l_l1">
<i class="fa fa-cog" aria-hidden="true"></i>
<h4>Our Values</h4>
<p class="agile_pgh">We have none at the moment, but we are open to suggestions.</p>
</div>
<div class="clearfix"></div>
<div class="w3_rm">
<a href="#services" class="page-scroll">READ MORE</a>
</div>
<div class="clearfix"></div>
</div>

</div>

</div>

<!-- /About Us -->

<!-- Services -->
<div class="services" id="services">
<div class="container">
<h3>Services</h3>
<p class="agileits">At the current moment we are only offering Decentralized Data Storage with the current features of: </p>
<div class="col-md-6 agileits">
<div class="col-md-2 w3_ic">
<i class="fa fa-file-o" aria-hidden="true"></i>
</div> 
<div class="col-md-10 w3_pgh">
<h4>Security</h4>
<p class="w3l_prgh">Our Data Storage is only its preliminary stages but we offer Top Level security for your files, such as End To End Encryption for uploading and downloading files, Decentralization of data,Data Backups, Data Auditing. </p>
</div>
<div class="clearfix"></div>
</div>
<div class="col-md-6 agileits">
<div class="col-md-2 w3_ic">
<i class="fa fa-hand-rock-o" aria-hidden="true"></i>
</div> 
<div class="col-md-10 w3_pgh">
<h4>Integrity</h4>
<p class="w3l_prgh">When you upload your data using our services we assure you it is both safe and unchanged, along with our Top Tier Security we have a Data Audit System in place which checks your data for any discrepancies . </p>
</div>
</div>
<div class="col-md-6 agileits">
<div class="col-md-2 w3_ic">
<i class="fa fa-universal-access" aria-hidden="true"></i>
</div> 
<div class="col-md-10 w3_pgh">
<h4>Availability</h4>
<p class="w3l_prgh">Your data may be decentralized, but your access is not. Your data can be accessed from anywhere provided you have an internet connection and remember you login credentials. </p>
</div>
</div>
<div class="col-md-6 agileits">
<div class="col-md-2 w3_ic">
<i class="fa fa-road" aria-hidden="true"></i>
</div> 
<div class="col-md-10 w3_pgh">
<h4>Low Pricing, Fast Speed</h4>
<p class="w3l_prgh">Thanks to our non traditional cloud network we can offer our customers low prices to open an account with us, not only that but but download speeds are much faster as compared to more traditional networks(Conditions applied). </p>
</div>
</div>
</div>
</div>
<!-- /Services -->

<!-- Team -->
<div class="team-section" id="team">
        <h2 align="center">Us</h2>
        <div class="container">
          <div class="row team-data">
            <div class="col-md-3 w3_team">
              <div class="team-profile">
                <div class="member-img" align="center">
                  <img src="images/tm1.jpg" class="img-responsive" alt="">
                </div>
                <h4 align="center">Rayomand Irani</h4>
				<h5>CEO</h5>
				<p>Hi! Im both the CEO and a developer.</p>
                <div class="member-social" align="center">
				  <a href=""><i class="fa fa-linkedin"></i></a>	
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-google"></i></a>
                </div>
            </div>
            </div>
            <div class="col-md-3 w3_team">
              <div class="team-profile">
                <div class="member-img" align="center">
                  <img src="images/tm2.jpg" class="img-responsive" alt="">
                </div>
                <h4 align="center">Noorullah Khan</h4>
				<h5>Chief Designer</h5>
				<p>I like drawing and coding.</p>
                <div class="member-social" align="center">
				  <a href=""><i class="fa fa-linkedin"></i></a>	
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-google"></i></a>
                </div>
              </div>
            </div>  <!-- member 1 ends here  -->
              <div class="col-md-3 w3_team">
              <div class="team-profile">
                <div class="member-img" align="center">
                  <img src="images/tm3.jpg" class="img-responsive" alt="">
                </div>
                <h4 align="center">Kamran Akram</h4>
				<h5>Database Manager</h5>
				<p>Your data is safe with me.</p>
                <div class="member-social" align="center">
				  <a href=""><i class="fa fa-linkedin"></i></a>	
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-google"></i></a>
                </div>
              </div>
            </div> <!-- member 2 ends here  -->
              <div class="col-md-3 w3_team">
              <div class="team-profile">
                <div class="member-img" align="center">
                  <img src="images/tm4.jpg" class="img-responsive" style="padding-bottom: 75px;" alt="">
                </div>
                <h4 align="center">Obaid Ahmed</h4>
				<h5>Executive Database Manager</h5>
				<p>Rest assured your data is safe.</p>
                <div class="member-social" align="center">
				  <a href=""><i class="fa fa-linkedin"></i></a>	
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-google"></i></a>
                </div>
              </div>
            </div> <!-- member 3 ends here  -->
              <div class="col-md-3 w3_team">
                  <div class="team-profile">
                      <div class="member-img" align="center">
                          <img src="images/haseeb.jpg" class="img-responsive" alt="">
                      </div>
                      <h4 align="center">Haseeb Khan</h4>
                      <h5>Chief DataAnalyst</h5>
                      <p>Finding patterns in data is an art form.</p>
                      <div class="member-social" align="center">
                          <a href=""><i class="fa fa-linkedin"></i></a>
                          <a href=""><i class="fa fa-facebook"></i></a>
                          <a href=""><i class="fa fa-twitter"></i></a>
                          <a href=""><i class="fa fa-google"></i></a>
                      </div>
                  </div>
              </div><!-- haseeb member end-->
              <div class="col-md-3 w3_team">
                  <div class="team-profile">
                      <div class="member-img" align="center">
                          <img src="images/affan.jpeg" class="img-responsive" alt="">
                      </div>
                      <h4 align="center">Affan Siddiqui</h4>
                      <h5>Software Enginner</h5>
                      <p>Others like painting, I like coding.</p>
                      <div class="member-social" align="center">
                          <a href=""><i class="fa fa-linkedin"></i></a>
                          <a href=""><i class="fa fa-facebook"></i></a>
                          <a href=""><i class="fa fa-twitter"></i></a>
                          <a href=""><i class="fa fa-google"></i></a>
                      </div>
                  </div>
              </div><!--affan member end-->

          </div>
        </div>
      
          
      </div>
	 
<!-- /Team -->


<!-- Clients -->
<div class="clients" id="testimonials">
<div class="container">
<h3>Clients</h3>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <div class="row" style="padding: 20px">
                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                    <p class="testimonial_para">An extraordinary leap in Cloud Storage.</p><br>
                    
                    <div class="col-sm-1">
                        <img src="images/t1.jpg" class="img-responsive" style="width: 80px">
                        </div>
                        <div class="col-sm-11">
                        <h4>Arsalan Bajwa</h4>
                       <h6>Student</h6>
                        </p>
                    </div>
                    
                  </div>
                </div>
               <div class="item">
                   <div class="row" style="padding: 20px">
                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                    <p class="testimonial_para">Great concept and implementation. A service for the future.</p><br>
                    <div class="row">
                    <div class="col-sm-1">
                        <img src="images/t2.jpg" class="img-responsive" style="width: 80px">
                        </div>
                        <div class="col-sm-11">
                        <h4>Rovaid Ahmed</h4>
                        <h6>Student</h6>
                        </p>
                    </div>
                    </div>
                  </div>
                </div>
				<div class="item">
                   <div class="row" style="padding: 20px">
                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                    <p class="testimonial_para">A revolutionary and futuristic implementation of Blockchain. </p><br>
                    <div class="row">
                    <div class="col-sm-1">
                        <img src="images/t3.jpg" class="img-responsive" style="width: 80px">
                        </div>
                        <div class="col-sm-11">
                        <h4>Muneer</h4>
                        <h6>Student</h6>
                        </p>
                    </div>
                    </div>
                  </div>
                </div>
				<div class="item">
                   <div class="row" style="padding: 20px">
                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                    <p class="testimonial_para">Taking an old concept and revolutionizing it to new heights.</p><br>
                    <div class="row">
                    <div class="col-sm-1">
                        <img src="images/t4.jpg" class="img-responsive" style="width: 80px">
                        </div>
                        <div class="col-sm-11">
                        <h4>Ahmed Abbas</h4>
                        <h6>Teacher/Bank Manager</h6>
                        </p>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="controls testimonial_control pull-right">
                <a class="left fa fa-chevron-left btn btn-default testimonial_btn" href="#carousel-example-generic"
                  data-slide="prev"></a>

                <a class="right fa fa-chevron-right btn btn-default testimonial_btn" href="#carousel-example-generic"
                  data-slide="next"></a>
              </div>
			  <div class="clearfix"></div>
        
	

</div>
</div>
<!-- /Clients -->

<!-- Contact Us-->
<div class="contact" id="contact">
<div class="container">
<h3>Contact Us</h3>
<div class="w3_cr">
<form action="#" method="post">
<div class="w3_txt">
<input type="text" name="name" placeholder=" Name" required="">
</div>
<div class="agile_dwn">
<div class="w3ls_lft">
<input type="email" name="email" placeholder="Mail ID" required="">
</div>
<div class="w3ls_rgt">
<input type="text" name="phonenumber" placeholder="PhoneNumber" required="">
</div>
<div class="clearfix"></div>
</div>
<div class="wthree_tt">
<textarea name="text" placeholder="Enter Message" required=""></textarea>
</div>
 <input type="submit" value="Submit">
</form>
</div>
<div class="clearfix"></div>
</div>
</div>
<div class="map">

 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509915.939484077!2d-123.79728565006775!3d37.1843152587944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C+USA!5e0!3m2!1sen!2sin!4v1509946591019" style="border:0" allowfullscreen></iframe>

 </div>
<!-- /Contact Us-->
<!-- Footer-->
<div class="footer">
<div class="container">
<div class="col-md-4 agile_l">
<h3>CloudChain</h3>
<p class="w3_pght">Safe,Secure,Decentralized</p>
<a href="mailto:info@cloudchain.com"> Support@Cloudchain.com</a>
</div>
<div class="col-md-5 w3l_c">
<h3>NewsLetter</h3>
<div class="row">
<form action="#" method="post">
<div class="col-md-8 w3l_s">
<input type="email" name="email" placeholder="Email" required="">
</div>
<div class="col-md-4 w3_c">
<input type="submit" value="subscribe">
</div>
</form>

</div>
<h4>Follow Us On</h4>
<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
</div>
<div class="col-md-3 wthree_l">
<h4>Contact Address</h4>
			<i class="fa fa-map-marker" aria-hidden="true"></i>
			<p>Defence View, Karachi, Pakistan</p>
			<i class="fa fa-phone" aria-hidden="true"></i>
			<p>Tel : +(92) 323 2047 3312     ,
			+(92) 341 5563 3439</p>
			<i class="fa fa-fax" aria-hidden="true"></i>
			<p>Fax : +(92) 341 5563 2178</p>
			<i class="fa fa-user" aria-hidden="true"></i>
			<p>Contact Name : Affan Siddiqui</p>
			<i class="fa fa-envelope" aria-hidden="true"></i>
			<p><a href="mailto:info@example.com">info@cloudchain.com</a></p>

</div>

<div class="clearfix"></div>
</div>

</div>

<div class="footerdown">
 <p>&copy; CloudChain 2018. All Rights Reserved </p>
 </div>
<!--/Footer-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/move-top.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/grayscale.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script src="js/simpleLightbox.js"></script>
<script type="text/javascript">
							$(window).load(function(){
							  $('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
								  $('body').removeClass('loading');
								}
							  });
							});
						  </script>

<!-- Light box js-file-->
	
	<script>
		$('.w3layouts_gallery_grid a').simpleLightbox();
	</script>
<!-- //Light box js-file-->

<script>
								var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
								showRightPush = document.getElementById( 'showRightPush' ),
								body = document.body;

								showRightPush.onclick = function() {
									classie.toggle( this, 'active' );
									classie.toggle( body, 'cbp-spmenu-push-toleft' );
									classie.toggle( menuRight, 'cbp-spmenu-open' );
									disableOther( 'showRightPush' );
								};

								function disableOther( button ) {
									if( button !== 'showRightPush' ) {
										classie.toggle( showRightPush, 'disabled' );
									}
								}
							</script>

<!-- Move-Top JS-->
<script type="text/javascript">
$(document).ready(function() {
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear' 
};
$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>

<!-- /Move-Top JS-->
</body>
</html>