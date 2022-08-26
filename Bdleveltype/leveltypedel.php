<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>刪除工作層級資料</title>
</head>
<body>
    <?php include '../title.php' ; ?>
    <?php
   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
  	$link=Connection();
 $sid = $_GET["sid"]  ;
$qry1 = "delete from  LC.Leveltype WHERE Leveltype.id = %d" ;	
$qrystr = sprintf($qry1,$sid) ;	
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
		# code...
}
mysqli_close($link);
?>
    <?php include '../footer.php' ; ?>
</body>

</html>
<script>

window.location = 'leveltypelist.php'
</script>";