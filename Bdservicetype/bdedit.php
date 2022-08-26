<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>修改服務類型資料</title>
</head>
<body>
    <?php include '../title.php' ; ?>
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

$qry1 = "update LC.Servicetype set  tname = '%s' , item='%s',price='%s', timerange='%s', deadrange ='%s', content='%s' where id = %s" ;	
$qrystr = sprintf($qry1,$tname,$item,$price,$timerange,$deadrange,$content,$id) ;
echo $qrystr."<br>" ;
$result=mysqli_query($link,$qrystr);
if($result!==FALSE)
{
	echo "Insert success <br>" ;
}
else {
	{
		echo "Insert fail <br>" ;
	}
}
 
mysqli_close($link);		// 關閉連線
?>
    <?php include '../footer.php' ; ?>
</body>

</html>
<script>
window.location = 'servicetypelist.php'
</script>";