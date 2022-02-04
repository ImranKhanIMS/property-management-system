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
	<title>Add New 5 Millions Post</title>
	
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
					 <form method="post" action="post5.php" enctype="multipart/form-data">
					 <h2>Add New 5 Millions House Detail</h2>
					<h3><input type="textbox" name="number" placeholder="House Number">        </h3><br>
					<h3><input type="textbox" name="title" placeholder="Titile">          </h3><br>
					<h3><textarea name="description" placeholder="Description"></textarea></h3><br>
					<h3><input type="file" name="file">                                             </h3><br>
					
<h2>More Pictures :</h2><h3><input type="file" name="1">                                             </h3>
					  <h3><input type="file" name="2">                                             </h3>
					  <h3><input type="file" name="3">                                             </h3>
					  <h3><input type="file" name="4">                                             </h3>
					  <h3><input type="file" name="5">                                             </h3>
					  <h3><input type="file" name="6">                                             </h3>
					  <h3><input type="file" name="7">                                             </h3>
					  <h3><input type="file" name="8">                                             </h3><br><br>
<h2>Videos	    :</h2><h3><input type="file" name="9">                                             </h3>
					  <h3><input type="file" name="10">                                             </h3>
					  <h3><input type="file" name="11">                                             </h3>
					  <h3><input type="file" name="12">                                             </h3>
                    <input class="bt_main" type="submit" name="submit" value="Add House Detail">
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
		$num=$_POST['number'];
		$titl=$_POST['title'];
		$desc=$_POST['description'];

		$name = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];
		
		if ($num!="" && $titl!="" && $desc!="" && $name!="")
		{
		move_uploaded_file($tmp,"img/".basename($name));
		$query = "INSERT INTO post5 (number,title,description,image) VALUES('$num','$titl','$desc','$name')";
		$query_exec=mysqli_query($conn,$query);
		}
		
		$name1 = $_FILES['1']['name'];
		$tmp1 = $_FILES['1']['tmp_name'];
		if ($num!="" && $name1!="")
		{
		move_uploaded_file($tmp1,"img/all/".basename($name1));
		$query = "INSERT INTO images (number,image) VALUES('$num','$name1')";
		$query_exec=mysqli_query($conn,$query);
		}
		
		$name2 = $_FILES['2']['name'];
		$tmp2 = $_FILES['2']['tmp_name'];
		if ($num!="" && $name2!="")
		{
		move_uploaded_file($tmp2,"img/all/".basename($name2));
		$query = "INSERT INTO images (number,image) VALUES('$num','$name2')";
		$query_exec=mysqli_query($conn,$query);
		}
		
		$name3 = $_FILES['3']['name'];
		$tmp3 = $_FILES['3']['tmp_name'];
		if ($num!="" && $name3!="")
		{
		move_uploaded_file($tmp3,"img/all/".basename($name3));
		$query = "INSERT INTO images (number,image) VALUES('$num','$name3')";
		$query_exec=mysqli_query($conn,$query);
		}

		$name4 = $_FILES['4']['name'];
		$tmp4 = $_FILES['4']['tmp_name'];
		if ($num!="" && $name4!="")
		{
		move_uploaded_file($tmp4,"img/all/".basename($name4));
		$query = "INSERT INTO images (number,image) VALUES('$num','$name4')";
		$query_exec=mysqli_query($conn,$query);
		}
		
		$name5 = $_FILES['5']['name'];
		$tmp5 = $_FILES['5']['tmp_name'];
		if ($num!="" && $name5!="")
		{
		move_uploaded_file($tmp5,"img/all/".basename($name5));
		$query = "INSERT INTO images (number,image) VALUES('$num','$name5')";
		$query_exec=mysqli_query($conn,$query);
		}
		
		$name6 = $_FILES['6']['name'];
		$tmp6 = $_FILES['6']['tmp_name'];
		if ($num!="" && $name6!="")
		{
		move_uploaded_file($tmp6,"img/all/".basename($name6));
		$query = "INSERT INTO images (number,image) VALUES('$num','$name6')";
		$query_exec=mysqli_query($conn,$query);
		}
		
		$name7 = $_FILES['7']['name'];
		$tmp7 = $_FILES['7']['tmp_name'];
		if ($num!="" && $name7!="")
		{
		move_uploaded_file($tmp7,"img/all/".basename($name7));
		$query = "INSERT INTO images (number,image) VALUES('$num','$name7')";
		$query_exec=mysqli_query($conn,$query);
		}
		
		$name8 = $_FILES['8']['name'];
		$tmp8 = $_FILES['8']['tmp_name'];
		if ($num!="" && $name8!="")
		{
		move_uploaded_file($tmp8,"img/all/".basename($name8));
		$query = "INSERT INTO images (number,image) VALUES('$num','$name8')";
		$query_exec=mysqli_query($conn,$query);
		}
		
		
		
		$name9 = $_FILES['9']['name'];
		$tmp9 = $_FILES['9']['tmp_name'];
		
		if ($num!="" && $name9!="")
		{
		move_uploaded_file($tmp9,"videos/".$name9);
		$query = "INSERT INTO videos (number,name) VALUES('$num','$name9')";
		$query_exec=mysqli_query($conn,$query);
		}
		
		$name10 = $_FILES['10']['name'];
		$tmp10 = $_FILES['10']['tmp_name'];
		
		if ($num!="" && $name10!="")
		{
		move_uploaded_file($tmp10,"videos/".$name10);
		$query = "INSERT INTO videos (number,name) VALUES('$num','$name10')";
		$query_exec=mysqli_query($conn,$query);
		}
		
		$name11 = $_FILES['11']['name'];
		$tmp11 = $_FILES['11']['tmp_name'];
		
		if ($num!="" && $name11!="")
		{
		move_uploaded_file($tmp9,"videos/".$name11);
		$query = "INSERT INTO videos (number,name) VALUES('$num','$name11')";
		$query_exec=mysqli_query($conn,$query);
		}
		
		$name12 = $_FILES['12']['name'];
		$tmp12 = $_FILES['12']['tmp_name'];
		
		if ($num!="" && $name12!="")
		{
		move_uploaded_file($tmp12,"videos/".$name12);
		$query = "INSERT INTO videos (number,name) VALUES('$num','$name12')";
		$query_exec=mysqli_query($conn,$query);
		}
		
		if ($query_exec==1)
		{
			echo "<h1 align='center'>File Uploaded Successfully!<br></h1>";
		}
	}

?>