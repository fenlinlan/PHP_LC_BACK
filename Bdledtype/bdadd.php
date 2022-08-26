<?php session_start();?>
<?php

   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
  	$link=Connection();
	  $id = $_POST["id"]  ;
	  $name = $_POST["name"] ;
	  $price = $_POST["price"] ;
	  $content = $_POST["content"]  ;
	  $location = $_POST["location"] ;
	  $godid = $_POST["godid"] ;

$qry1 = "insert into  LC.Ledtype (id,name,price,content,location,godid) values ('%s','%s','%d','%s','%s','%d');";
$qrystr = sprintf($qry1,$id, $name,$price, $content,$location,$godid) ;
echo $qrystr."<br>" ;

$result = mysqli_query($link,$qrystr);		//執行sql語法
if($result!==FALSE)
{
	echo "Insert success <br>" ;
}
else {
	{
		echo "Insert fail <br>" ;
	}
		# code...
}
 
mysqli_close($link);
?>

<?php include '../footer.php' ; ?>
</body>

</html>
<script>
window.location = 'ledtypelist.php'
</script>";