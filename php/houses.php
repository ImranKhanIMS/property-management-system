<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>House Images</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <link rel="icon" href="images/fevicon/fevicon.png" type="image/png" />
      <link rel="stylesheet" href="../css/bootstrap.min.css" />
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/responsive.css" />
      <link rel="stylesheet" href="../css/colors.css" />
      <link rel="stylesheet" href="../css/animate.css" />
	  </head>
   <body id="default_theme" class="about">
   <header class="header header_style1">
         <div class="container">
            <div class="row">
               <div class="col-md-9 col-lg-10">
                  <div class="logo"><a href="index.html"><img src="../images/logo.png" alt="Logo Not Found" /></a></div>
                  <div class="main_menu float-right">
                     <div class="menu">
                        <ul class="clearfix">
                           <li><a href="../index.php">Home</a></li>
                           <li><a href="../about.html">About</a></li>
                           <li><a href="../service.html">Service</a></li>
                           <li><a href="../houses.html">All Houses</a></li>
                           <li><a href="../special.html">Special Houses</a></li>
                           <li><a href="../contact.html">Contact</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header><br><br><br>
	  
               <div class="full">
                  <div class="row">
                     <div class="col-sm-12">
                       <div class="full text_align_center">
                         <div class="heading_main center_head_border heading_style_1">
                           <h2>All Picture of House</h2>
                           <h5>Click on any Picture to Watch Video of this House</h5>
                         </div>
                       </div>
                     </div>
                  </div>
               </div>

               <div class="full">
                  <ul>
				  
				  
				  
				  
				  
				  <?php
	 
	$conn=mysqli_connect("localhost","root","","property");
	if(!$conn) echo "UnSuccessful";
	
	$num=$_GET["myid"];
	
	$query="select * from images where number='$num'";
	$query_exec=mysqli_query($conn,$query);

	while ($row=mysqli_fetch_array($query_exec))
	{
		echo "<li class='scren screen1'><a href='videos.php?vid=$num'><img width='600' height='300' class='img-responsive' src='img/all/".$row['image']."' alt='image not found'></a></li>";
	}
		 ?>
                  </ul>
               </div>

            </div>
         </div>
   </body>
</html>