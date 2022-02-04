<?php
		session_start();
		if (isset($_SESSION['name']))
		{	
?>

<!DOCTYPE html>
<html lang="en">
   <head>
	  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
	  <link rel="icon" href="../images/fevicon/fevicon.png" type="image/png" />
      <link rel="stylesheet" href="../css/bootstrap.min.css" />
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/responsive.css" />
      <link rel="stylesheet" href="../css/colors.css" />
      <link rel="stylesheet" href="../css/animate.css" />
      <!-- Link's Adding -->
	<title>Admin Panel</title>
	
	<style>
		body
		{
			background-image:url('img/bg.png');
			margin:0;
		}
	</style>
   </head>

   <body>
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="full">
                     <div class="slide_cont">
					 <form method="post" action="post.php" enctype="multipart/form-data">
					 <h2>Admin Panel</h2>
					<h3><a href='post.php'><input class="bt_main" type='button' value='Add New House'><br><br><br></a></h3><br>
					<h3><a href='post3.php'><input class="bt_main" type='button' value='Add New 3Million House'><br><br><br></a></h3><br>
					<h3><a href='post5.php'><input class="bt_main" type='button' value='Add New 5Million House'><br><br><br></a></h3><br>
					<h3><a href='post10.php'><input class="bt_main" type='button' value='Add New 10Million House'><br><br><br></a></h3><br>
					<h3><a href='post25.php'><input class="bt_main" type='button' value='Add New 25Million House'><br><br><br></a></h3><br>
					<h3><a href='post50.php'><input class="bt_main" type='button' value='Add New 50Million House'><br><br><br></a></h3><br>
					<h3><a href='post99.php'><input class="bt_main" type='button' value='Add New 99Million House'><br><br><br></a></h3><br>
					<h3><a href='delete.php'><input class="bt_main" type='button' value='Delete House'><br><br><br></a></h3><br>
					<h3><a href='edit.php'><input class="bt_main" type='button' value='Update House'></a></h3><br>
					 </form>
					 
					 <br><br><br>
					 <form action="logout.php" method="post">
						<input class="white_bt bt_main" type="submit" value="Log_Out">
					 </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </body>
</html>
<?php
	}
	else
	{
		header("Location: login.php");
	}
?>