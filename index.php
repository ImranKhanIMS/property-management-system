<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Home</title>
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
                           <li class="active"><a href="index.html">Home</a></li>
						   <li><a href="#service">Service</a></li>
                           <li><a href="#mediam">Mediam Price Houses</a></li>
                           <li><a href="#special">Special Houses</a></li>
						   <li><a href="#motive">About</a></li>
                           <li><a href="#contact">Contact</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-lg-2">
                  <div class="right_bt"><a class="bt_main" href="php/login.php">Login Admin</a> </div>
               </div>
            </div>
         </div>
      </header>
	  
	  <section id="banner_parallax" class="slide_banner1">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="full">
                     <div class="slide_cont">
					 <h2>Watch Demo of Houses From Home</h2>
                        <p>SAVE Your Time! Watch Demo of the Houses Before Buying 100% FREE</p>
                        <div class="full slide_bt"> <a class="white_bt bt_main" href="index.html">New Houses</a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="full">
                     <div class="slide_pc_img wow fadeInRight" data-wow-delay="1s" data-wow-duration="2s"> <img src="images/pc-banner.png" alt="#" /> </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
           <a name="service"> <section class="layout_padding padding_top_0"></a>
         <div class="container">							
							
			<!-- Php Coading -->
			
	 <?php
	 
	$conn=mysqli_connect("localhost","root","","property");
	if(!$conn) echo "UnSuccessful";
		
	$query="select * from post";
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
					 For More Pictures and Video of This House <a href='php/houses.php?myid=".$row['number']."'>Click Here</a></p>
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
					 For More Pictures and Video of This House <a href='php/houses.php?myid=".$row['number']."'>Click Here</a></p>
                  </div>
               </div>
			 </div>";
		}
	}
		 ?>
		 
         </div>
      </section>
     
       <a name="mediam"><section class="layout_padding gradiant_bg cross_layout"></a>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="information_blogs">
                     <div class="imf_icon"><img src="images/icon1.png" alt="#" /></div>
                     <div class="imf_head">
                        <h3>Houses Under RS 3 Millions</h3>
                     </div>
                     <div class="imf_cont">
                        <p>To Buy Houses Under RS 3 Millions Clck on Read More Button Below</p>
                     </div>
                     <div class="imf_read"><a href="3million.php">See Houses</a></div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="information_blogs">
                     <div class="imf_icon"><img src="images/icon2.png" alt="#" /></div>
                     <div class="imf_head">
                        <h3>Houses Under RS 5 Millions</h3>
                     </div>
                     <div class="imf_cont">
                        <p>To Buy Houses Under RS 5 Millions Clck on Read More Button Below</p>
                     </div>
                     <div class="imf_read"><a href="5million.php">See Houses</a></div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="information_blogs">
                     <div class="imf_icon"><img src="images/icon3.png" alt="#" /></div>
                     <div class="imf_head">
                        <h3>Houses Under RS 1 Coror</h3>
                     </div>
                     <div class="imf_cont">
                        <p>To Buy Houses Under RS 1 Coror Clck on Read More Button Below</p>
                     </div>
                     <div class="imf_read"><a href="10million.php">See Houses</a></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
      <section class="layout_padding layer_style">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="full text_align_center">
                     <div class="heading_main center_head_border heading_style_1">
                        <a name="motive"><h2>Our <span>Motive</span></h2>
                     </div>
                  </div>
               </div>
            </div>
            <h3>Our Motive is to Provide You  Watch Demo of Houses From Home
				and SAVE Your Time!
				So Watch Demo of the Houses Before Buying 100% FREE Online Through Our Website</h3>
      </section>
      <section class="layout_padding gradiant_bg cross_layout">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="full text_align_center white_fonts">
                     <div class="heading_main center_head_border heading_style_1">
                        <h2>Contact <span>US Way</span></h2>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row step_section">
               <div class="offset-xl-1 col-xl-10 col-md-12">
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="step_blog arrow_right_step">
                           <div class="step_inner">
                              <i class="fa fa-youtube"></i><br>
                              <p>YouTube<br><br>IT Peshawar</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="step_blog">
                           <div class="step_inner">
                              <i class="fa fa-facebook"></i><br>
                              <p>Facebook<br><br>IT Peshawar</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="step_blog">
                           <div class="step_inner">
                              <i class="fa fa-instagram"></i><br>
                              <p>Instagram<br><br>IT Peshawar</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="step_blog">
                           <div class="step_inner">
                              <i class="fa fa-twitter"></i><br>
                              <p>Twitter<br><br>IT Peshawar</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="layout_padding">
         <div class="container">
            <div class="row">
               <div class="full">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="full text_align_center">
                           <div class="heading_main center_head_border heading_style_1">
                              <a name="special"><h2>Houses Price Above 10 Millions</h2></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="full" style="margin-top:10px;">
                     <div class="row">
                        <div class="col-sm-12 col-md-4">
                           <div class="table_price text_align_center">
                              <div class="table_price_head">
                                 <h5>Hayatabad Fase2</h5>
                              </div>
                              <div class="table_price_cont">
                                 <div class="table_price_per">
                                    <p>RS : 25 Millions<br>
                                    </p>
                                 </div>
                                 <div class="table_price_cont_bottm">
                                    <ul>
                                 	   <li>3 Floors</li>
                                       <li>1 Kitchen</li>
                                       <li>1 Basment</li>
									   <li>20 Marla Flat</li>
                                       <li>5 Siparate Bathrooms</li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="table_price_bottm"> <a class="bt_main" href="25million.php">See Houses</a> </div>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                           <div class="active_price table_price text_align_center">
                              <div class="table_price_head">
                                 <h5>Samzali Town Fase3</h5>
                              </div>
                              <div class="table_price_cont">
                                 <div class="table_price_per">
                                    <p>RS : 50 Millions<br>
                                    </p>
                                 </div>
                                 <div class="table_price_cont_bottm">
                                    <ul>
                                 	   <li>4 Floors</li>
                                       <li>3 Kitchen</li>
                                       <li>1 Basment</li>
									   <li>30 Marla Flat</li>
                                       <li>10 Siparate Bathrooms</li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="table_price_bottm"> <a class="bt_main" href="50million.php">See Houses</a> </div>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                           <div class="table_price text_align_center">
                              <div class="table_price_head">
                                 <h5>Hayatabad Fase1</h5>
                              </div>
                              <div class="table_price_cont">
                                 <div class="table_price_per">
                                    <p>RS : 99 Millions<br>
                                    </p>
                                 </div>
                                 <div class="table_price_cont_bottm">
                                    <ul>
                                 	   <li>5 Floors</li>
                                       <li>10 Kitchen</li>
                                       <li>1 Basment</li>
									   <li>40 Marla Flat</li>
                                       <li>15 Siparate Bathrooms</li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="table_price_bottm"> <a class="bt_main" href="99million.php">See Houses</a> </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <a name="contact"><section class="contact_section"></a>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-6" style="padding:0;">
                  <div class="full">
                     <div id="map"></div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6" style="padding:0;">
                  <div class="full">
                     <div class="contact_form white_heading_border">
                        <div class="contact_form_inner">
                           <div class="full_heading white_fonts heading_main heading_style_1">
                              <h2>Contact <span>us</span></h2>
                           </div>
                           <p>You Can Easily Contact us Through This Website Just Fill Up The Below Detail and Send Email to Us . We Will be Online 23 Hours Service We Will Reply You Within 30 Minutes</p>
                           <div class="form_contact">
                              <!-- form -->
                              <form method="post" action="php/contact.php">
                                 <fieldset>
                                    <div class="field">
                                       <input type="text" name="name" placeholder="Your name" required="">
                                    </div>
                                    <div class="field">
                                       <input type="text" name="phone" placeholder="Your phone" required="">
                                    </div>
                                    <div class="field">
                                       <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="field">
                                       <textarea name="message" placeholder="Message" required=""></textarea>
                                    </div>
                                    <div class="field">
                                       <button class="field_bt">Send</button>
                                    </div>
                                 </fieldset>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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