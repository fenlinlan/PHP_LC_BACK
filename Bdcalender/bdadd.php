<?php session_start();?>

<?php 
   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
  	$link=Connection();	

	
	  $name = $_POST["name"] ;
	  $timerange = $_POST["timerange"] ;
	  $deadrange = $_POST["deadrange"] ;
	  $ps = $_POST["ps"] ;
	
$qry1 = "insert into  LC.Calendar (name,timerange,deadrange,ps) values ('%s','%s','%s','%s');";
$qrystr = sprintf($qry1,$name,$timerange,$deadrange,$ps) ;
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

window.location = 'calenderlist.php'
</script>";