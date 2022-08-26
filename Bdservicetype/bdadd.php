<?php session_start();?>

<?php 
   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
  	$link=Connection();	
	 $id = $_POST["id"]  ;
	 $tname = $_POST["tname"] ;
	 $item = $_POST["item"] ;
	 $price = $_POST["price"] ;
	 $timerange = $_POST["timerange"] ;
	 $deadrange = $_POST["deadrange"] ;
	 $content = $_POST["content"] ;
	
$qry1 = "insert into  LC.Servicetype (id,tname,item,price,timerange,deadrange,content) values ('%s','%s','%s','%d','%s','%s','%s');";
$qrystr = sprintf($qry1,$id,$tname,$item,$price,$timerange,$deadrange,$content) ;
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

window.location = 'servicetypelist.php'
</script>";