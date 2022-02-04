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
	<title>Edit Post</title>
	
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
					 <form method="post" action="edit.php" enctype="multipart/form-data">
					 <h2>Update House Detail</h2>
					<h3><input type="textbox" name="price" placeholder="House Price Criteria"></h3><br>
					<h3><input type="textbox" name="number" placeholder="House Number">        </h3><br>
					<h3><input type="textbox" name="title" placeholder="House Titile">          </h3><br>
					<h3><textarea name="description" placeholder="House Description"></textarea></h3><br>
					<h3><input type="file" name="file">                                             </h3><br>
                    <input class="bt_main" type="submit" name="submit" value="Update House Detail">
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
		$titl=$_POST['title'];
		$desc=$_POST['description'];

		$name = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];
		
		move_uploaded_file($tmp,"img/".basename($name));

		if ($p=="")
		{
		$query = "UPDATE post SET title='$titl',description='$desc',image='$name' WHERE number='$num' ";
		$query_exec=mysqli_query($conn,$query);	
		}
		
		if ($p=="3")
		{
		$query = "UPDATE post3 SET title='$titl',description='$desc',image='$name' WHERE number='$num' ";
		$query_exec=mysqli_query($conn,$query);
		}
		
		if ($p=="5")
		{
		$query = "UPDATE post5 SET title='$titl',description='$desc',image='$name' WHERE number='$num' ";
		$query_exec=mysqli_query($conn,$query);
		}
		
		if ($p=="10")
		{
		$query = "UPDATE post10 SET title='$titl',description='$desc',image='$name' WHERE number='$num' ";
		$query_exec=mysqli_query($conn,$query);	
		}
		
		if ($p=="25")
		{
		$query = "UPDATE post25 SET title='$titl',description='$desc',image='$name' WHERE number='$num' ";
		$query_exec=mysqli_query($conn,$query);
		}
		
		if ($p=="50")
		{
		$query = "UPDATE post50 SET title='$titl',description='$desc',image='$name' WHERE number='$num' ";
		$query_exec=mysqli_query($conn,$query);	
		}
		
		if ($p=="99")
		{
		$query = "UPDATE post99 SET title='$titl',description='$desc',image='$name' WHERE number='$num' ";
		$query_exec=mysqli_query($conn,$query);	
		}
		
		if ($query_exec==1)
		{
			echo "<h1 align='center'>House Updated Successfully!<br></h1>";
		}
	}

?>