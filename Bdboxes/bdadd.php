<?php session_start();?>

<?php 
   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
  	$link=Connection();	
	 $id = $_POST["id"]  ;
	 $name = $_POST["name"] ;
	 $location = $_POST["location"] ;
	
$qry1 = "insert into  LC.Boxes (name,location) values ('%s','%s');";
$qrystr = sprintf($qry1,$name,$location) ;
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

window.location = 'boxeslist.php'
</script>";