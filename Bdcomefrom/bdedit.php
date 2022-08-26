<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>修改資金來源資料</title>
</head>
<body>
    <?php include '../title.php' ; ?>
    <?php
   	include("../Connections/comlib.php");	
   	include("../Connections/iotcnn.php");	
  	$link=Connection();	

	  $sid = $_POST["sid"]  ;
	  $name = $_POST["name"] ;

$qry1 = "update LC.Comefrom set  id='%s', name = '%s'  where id = '%s'" ;	
$qrystr = sprintf($qry1,$sid ,$name,$sid) ;
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
window.location = 'comelist.php'
</script>";