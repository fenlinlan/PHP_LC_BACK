<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>刪除籤詩資料</title>
</head>
<body>
    <?php include '../title.php' ; ?>
    <?php
   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
  	$link=Connection();
 $id = $_GET["id"]  ;
$qry1 = "delete from  LC.Draws WHERE id = %s" ;	
$qrystr = sprintf($qry1,$id) ;	
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

window.location = 'drawsearch.php'
</script>";