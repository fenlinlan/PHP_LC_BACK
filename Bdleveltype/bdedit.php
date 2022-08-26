<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>修改工作層級資料</title>
</head>
<body>
    <?php include '../title.php' ; ?>
    <?php
   	include("../Connections/comlib.php");	
   	include("../Connections/iotcnn.php");	
  	$link=Connection();	
	  $id = $_POST["id"]  ;
	  $name = $_POST["name"] ;
	//  UPDATE `Leveltype` SET `id` = '04', `name` = '04', `crdtime` = CURRENT_TIMESTAMP WHERE `Leveltype`.`id` = '3';
$qry1 = "update LC.Leveltype set  name = '%s'  where id = '%s'" ;	
$qrystr = sprintf($qry1,$name,$id) ;
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
window.location = 'leveltypelist.php'
</script>";