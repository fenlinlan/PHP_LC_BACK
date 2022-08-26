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
	  $name = $_POST["name"] ;
	  $leveltype = $_POST["leveltype"] ;
	  $phone = $_POST["phone"] ;
$qry1 = "update LC.Staff set  name = '%s' , leveltype='%s',phone='%s' where id = '%d'" ;	
$qrystr = sprintf($qry1,$name,$leveltype,$phone,$sid) ;
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
window.location = 'stafflist.php'
</script>";