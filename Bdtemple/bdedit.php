<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>修改宮殿資料</title>
</head>
<body>
    <?php include '../title.php' ; ?>
    <?php
   	include("../Connections/comlib.php");	
   	include("../Connections/iotcnn.php");	
  	$link=Connection();	
	  $sid = $_POST["sid"]  ;
	  $id = $_POST["id"]  ;
	  $name = $_POST["name"] ;
// UPDATE `Temple` SET `id` = '04' , name = '%s' WHERE `Temple`.`id` = '01';
$qry1 = "update LC.Temple set id='%s', name = '%s' where id = '%s' " ;	
$qrystr = sprintf($qry1,$id,$name,$sid) ;
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
window.location = 'templelist.php'
</script>";