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
	<title>Delete Post</title>
	
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
					<form method="post" action="delete.php" enctype="multipart/form-data">
					 <h2>Delete House</h2>
						<form method="post" action="delete.php">
							<h3><input type="textbox" name="price" placeholder="House Price Criteria"></h3><br>
							<h3><input type="textbox" name="number" placeholder="House Number"></h3><br>
							<input class="bt_main" type="submit" name="submit" value="Delete House"><br>
					</form>
					</div>
                  </div>
               </div>
            </div>
         </div>
   </body>
</html>


<?php
		$conn=mysqli_connect("localhost","root","","property");
		if(!$conn) echo "UnSuccessful";

		
	if (isset($_POST['submit']))
	{
		$p=$_POST['price'];
		$num=$_POST['number'];
		
		if ($p=="")
		{
		$query="delete from post WHERE number='$num'";
		$query_exec=mysqli_query($conn,$query);	
		}
		
		if ($p=="3")
		{
		$query="delete from post3 WHERE number='$num'";
		$query_exec=mysqli_query($conn,$query);	
		}
		
		if ($p=="5")
		{
		$query="delete from post5 WHERE number='$num'";
		$query_exec=mysqli_query($conn,$query);	
		}
		
		if ($p=="10")
		{
		$query="delete from post10 WHERE number='$num'";
		$query_exec=mysqli_query($conn,$query);	
		}
		
		if ($p=="25")
		{
		$query="delete from post25 WHERE number='$num'";
		$query_exec=mysqli_query($conn,$query);	
		}
		
		if ($p=="50")
		{
		$query="delete from post50 WHERE number='$num'";
		$query_exec=mysqli_query($conn,$query);	
		}
		
		if ($p=="99")
		{
		$query="delete from post99 WHERE number='$num'";
		$query_exec=mysqli_query($conn,$query);	
		}
		if ($query_exec==1)
		{
			echo "<h1>House Removed Succeffuly</h1>";
		}
	}

?>