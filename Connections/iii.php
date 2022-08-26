<?php

		$server="localhost";
		$user="fcu";
		$pass="12345678";
		$db="fcu";
   		//echo "cnn is ok 01"."<br>" ;	 
		echo $server."/".$user."/".$pass."/".$db."<br>" ;
		$connection = mysqli_connect($server, $user, $pass, $db ) ;
   		//echo "cnn is ok 02"."<br>" ;	   	

	
		
   		//echo "cnn is ok 03"."<br>" ;	   	
		mysqli_select_db($connection,$db); 
   		//echo "cnn is ok 04"."<br>" ;	   	
		mysqli_query($connection,"SET NAMES UTF8");
   		//echo "cnn is ok 05"."<br>" ;	   	
		session_start();
   		//echo "cnn is ok 06"."<br>" ;	   	

?>