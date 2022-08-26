<?php

	function Connection() 
	{

		$server="140.134.25.43";
		$user="root";
		$pass="52005505";
		$db="fcu";
		$dbport = 33306 ;
   		//echo "cnn is ok 01"."<br>" ;	   	
		$connection = new mysqli($server,$user,$pass,$db , $dbport);
		//$connection = mysqli_connect($server, $user, $pass, $db ) ;
   		//echo "cnn is ok 02"."<br>" ;	   	

		if ($mysqli -> connect_errno) 
		{
		  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		  exit();
		}
		
   		//echo "cnn is ok 03"."<br>" ;	   	
		$connection -> query($connection,$db); 
   		//echo "cnn is ok 04"."<br>" ;	   	
		$connection -> query("SET NAMES UTF8");
   		//echo "cnn is ok 05"."<br>" ;	   	
		session_start();
   		//echo "cnn is ok 06"."<br>" ;	   	
	
		return $connection  ;	
	}
	
?>