<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>50Millions Houses</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="images/fevicon/fevicon.png" type="image/png" />
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/responsive.css" />
      <link rel="stylesheet" href="css/colors.css" />
      <link rel="stylesheet" href="css/animate.css" />
      <!-- Link's Adding -->
   </head>
   
   <body id="default_theme" class="home_page1">
   
      <header class="header header_style1">
         <div class="container">
            <div class="row">
               <div class="col-md-9 col-lg-10">
                  <div class="logo"><a href="index.html"><img src="images/logo.png" alt="Logo Not Found" /></a></div>
                  <div class="main_menu float-right">
                     <div class="menu">
                        <ul class="clearfix">
                           <li><a href="index.html">Home</a></li>
                           <li><a href="about.html">About</a></li>
                           <li><a href="service.html">Service</a></li>
                           <li><a href="houses.html">All Houses</a></li>
                           <li><a href="special.html">Special Houses</a></li>
                           <li><a href="contact.html">Contact</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
	   <section class="layout_padding padding_top_0">
         <div class="container">
	  						
			<!-- Php Coading -->
			
	 <?php
	 
	$conn=mysqli_connect("localhost","root","","property");
	if(!$conn) echo "UnSuccessful";
		
	$query="select * from post50";
	$query_exec=mysqli_query($conn,$query);

	while ($row=mysqli_fetch_array($query_exec))
	{
		if ($row['number']%2==0)
		{
		echo "<div class='row margin_bottom_30'>
               <div class='col-md-6 cont_theme_blog'>
                  <div class='full'>
                     <h3>".$row['title']."</h3>
                      <p>".$row['description']."!<br><br><br>
					 For More Pictures and Video of This House <a href='#'>Click Here</a></p>
                  </div>
               </div>
               
               <div class='col-md-6 wow fadeInRight' data-wow-delay='0.5' data-wow-duration='1s'>
                  <div class='full'>
                     <div class='center'><a href='php/houses.php?myid=".$row['number']."' target='new window'><img width='600' height='350' src='php/img/".$row['image']."' alt='#' /></a>
					 </div>
                  </div>
               </div>
            </div>";
		}	
			
		else
		{
		echo "<div class='row margin_bottom_30'>
               <div class='col-md-6 wow fadeInLeft' data-wow-delay='0.5' data-wow-duration='1s'>
                  <div class='full'>
                     <div class='center'><a href='php/houses.php?myid=".$row['number']."' target='new window'><img width='600' height='350' src='php/img/".$row['image']."' alt='#' /></a></div>
                  </div>
               </div>
              
               <div class='col-md-6 cont_theme_blog'>
                  <div class='full'>
                     <h3>".$row['title']."</h3>
                      <p>".$row['description']."!<br><br><br>
					 For More Pictures and Video of This House <a href='#'>Click Here</a></p>
                  </div>
               </div>
			 </div>";
		}
	}
		 ?>
		 
         </div>
      </section>
     
      
      <footer class="footer_style_2">
         <div class="footer_top">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 margin_bottom_30">
                     <div class="full width_9" style="margin-bottom:25px;"> <a href="index.html"><img class="img-responsive" width="250" src="images/logo.png" alt="#"></a> </div>
                     <div class="full width_9">
                        <p>We Will Provide You Free of Cost Service of Wathing the Houses Online to Save Your Time if You Like any House You Can Simply Contact Us with any Platform and we will Invite you For the Vist of Your Favourite House after Your Contat.</p>
                     </div>
                     <div class="full width_9">
                        <p>We Will Provide You Free of Cost Service of Wathing the Houses Online to Save Your Time..</p>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 margin_bottom_30">
                     <div class="full">
                        <div class="footer_blog_2 width_9">
                           <h3>Feed</h3>
                           <p><i class="fa fa-facebook"></i>
                              We Will Provide You Free of Cost Service of Wathing the Houses Online to Save Your Time if You Like any House You Can Simply Contact Us with any Platform and we will Invite you For the Vist of Your Favourite House after Your Contat.
                           </p>
                           <p><i class="fa fa-twitter"></i>
                             We Will Provide You Free of Cost Service of Wathing the Houses Online to Save Your Time if You Like any House You Can Simply Contact Us with any Platform
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 margin_bottom_30">
                     <div class="full">
                        <div class="footer_blog_2">
                           <h3>Social Media</h3>
                        </div>
                     </div>
                     <div class="full">
                        <ul class="footer-links">
                           <li><a href="#"><i class="fa fa-youtube"></i>  1.34K Subscribers</a></li>
                           <li><a href="#"><i class="fa fa-facebook"></i> 897 Likes</a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i>  568 Followers</a></li>
                           <li><a href="#"><i class="fa fa-pinterest"></i>2538+ Pins</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 margin_bottom_30">
                     <div class="full">
                        <div class="footer_blog_2 width_9">
                           <h3>Contact Number<br>+923439858580<br><br><br>Whatsapp Number<br>+923439858580<br><br><br>Youtube Channel Link<br>youtube.com/itpeshawar</h3>
                        </div>
                        <div class="blog_post_footer">
                           
                           <div class="blog_post_cont">
                           </div>
                        </div>
                        <div class="blog_post_footer">
                           <div class="blog_post_cont">
                           </div>
                        </div>
                        <div class="blog_post_footer">
                          <div class="blog_post_cont">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer_bottom">
            <p>Owner of this Website <b>Imran Khan</b></p>
         </div>
      </footer>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/wow.js"></script>
      <script src="js/custom.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
   </body>
</html>