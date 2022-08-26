<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>修改行事曆資料</title>
</head>
<body>
    <?php include '../title.php' ; ?>
    <?php
   	include("../Connections/comlib.php");	
   	include("../Connections/iotcnn.php");	
  	$link=Connection();	
$id= $_POST["id"];
	  $name = $_POST["name"] ;
	  $timerange = $_POST["timerange"] ;
	  $deadrange = $_POST["deadrange"] ;
	  $ps = $_POST["ps"] ;
//  UPDATE `Calendar` SET `timerange` = '4', `deadrange` = '55', `ps` = '444' WHERE `Calendar`.`id` = 1;
$qry1 = "update LC.Calendar set  id='%d', name = '%s' , timerange ='%s',deadrange ='%s',ps ='%s' where id = '%d'" ;	
$qrystr = sprintf($qry1, $id ,$name,$timerange,$deadrange,$ps,$id) ;
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
window.location = 'calenderlist.php'
</script>";