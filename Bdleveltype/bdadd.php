<?php session_start();?>

<?php 
   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
  	$link=Connection();	
	 $id = $_POST["id"]  ;
	 $name = $_POST["name"] ;
$qry1 = "insert into  LC.Leveltype (id,name) values (NULL,'%s');";
$qrystr = sprintf($qry1,$name) ;
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

window.location = 'leveltypelist.php'
</script>";