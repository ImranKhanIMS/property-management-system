<?php
		$conn=mysqli_connect("localhost","root","","property");
		if(!$conn) echo "UnSuccessful";

		$name=$_POST['name'];
		$password=$_POST['password'];
		
		if ($name=='' || $password=='')
		{
			echo "<br><br><br><h1 align='center'> Incomplete Credidential!</h1>";
		}
		
		else
		{
			$query="select * from users where name='$name' and password='$password'";
			$exec_query=mysqli_query($conn,$query);
			$s=mysqli_num_rows($exec_query);
			
			if ($s>=1)
			{
				session_start();
				$_SESSION['name']=$name;
				header("Location: index.php");
			}
			else
			{
				echo "<br><br><br><h1 align='center'>Invalid User Name OR Password<br>Plz Try Again!</h1>";
			}
		}
?>