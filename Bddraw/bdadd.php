<?php session_start();?>

<?php 
   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
  	$link=Connection();	
	// $id = $_POST["id"]  ;
	 $phone = $_POST["phone"] ;
	 $drawtype = $_POST["drawtype"] ;
	 $number = $_POST["number"] ;

	
$qry1 = "insert into  LC.Draws (id,phone,drawtype,number) values (NULL,'%s','%s','%s');";
$qrystr = sprintf($qry1,$phone,$drawtype,$number) ;
echo $qrystr."<br>" ;
$result = mysqli_query($link,$qrystr);
if($result!==FALSE)
{
	echo "Insert success <br>" ;
}
else {
	{
		echo "Insert fail <br>" ;
	}
}
mysqli_close($link);
?>
<?php include '../footer.php' ; ?>
</body>
</html>
<script>

window.location = 'drawsearch.php'
</script>";