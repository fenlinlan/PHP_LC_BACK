<?php session_start();?>

<?php 
   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
  	$link=Connection();	

	 $name = $_POST["name"] ;
	 $location = $_POST["location"] ;
	 $pic = $_POST["file"] ;
	
$qry1 = "insert into  LC.Gods (name,location,pic) values ('%s','%s','%s');";
$qrystr = sprintf($qry1,$name,$location,$pic) ;
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

window.location = 'godlist.php'
</script>";