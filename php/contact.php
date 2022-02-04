<?php

	$number=$_POST['phone'];
	$nam=$_POST['name'];

	$to="imrankhanvloger@gmail.com";
	$subject="Name => ".$nam."Number =>".$number;
	$from=$_POST['email'];
	$msg=$_POST['message'];
	
	
	mail($to,$subject,$msg,$from);
	
	echo "<h2>Message Send Successfuly!</h2>";

?>