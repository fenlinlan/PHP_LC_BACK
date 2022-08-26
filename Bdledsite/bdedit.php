<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>修改燈座資料</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <?php
   	include("../Connections/comlib.php");	
   	include("../Connections/iotcnn.php");	
  	$link=Connection();	
	  $id = $_POST["id"]  ;
	  $name = $_POST["name"] ;
	  $typeid= $_POST["typeid"] ;
	  $amount = $_POST["amount"]  ;

$qry1 = "update  LC.Ledsite set  name = '%s', typeid = '%s' ,amount= %d where id = '%s' " ;		//SQL填空
$qrystr = sprintf($qry1, $name,$typeid, $amount,$id) ;		// 組立要執行的SQL語法
echo $qrystr."<br>" ;

$result=mysqli_query($link,$qrystr);		//執行sql語法
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
//mysqli_free_result($result);	// 關閉資料集
 
mysqli_close($link);		// 關閉連線
?>
    <?php include '../footer.php' ; ?>
</body>

</html>
<script>
// 這一區
// php would run before javascript
// better solution to catch error
// ajax request in led.php request for this lamp.php than handle alert() based on callback
window.location = 'ledsitelist.php'
</script>";