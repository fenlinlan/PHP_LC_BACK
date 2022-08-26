<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>修改捐贈表單資料</title>
</head>
<body>
    <?php include '../title.php' ; ?>
    <?php
   	include("../Connections/comlib.php");	
   	include("../Connections/iotcnn.php");	
  	$link=Connection();	
	  $id = $_POST["id"]  ;
	  $name = $_POST["name"] ;
	  $phone = $_POST["phone"]  ;
	  $money = $_POST["money"] ;
	  $ps = $_POST["ps"]  ;
	  $comefrom = $_POST["comefrom"] ;

$qry1 = "update LC.Donate set  id='%d', name = '%s' , phone = '%s', money = '%d', ps = '%s', comefrom = '%s' where id = '%d'" ;	
$qrystr = sprintf($qry1,$id ,$name,$phone, $money,$ps, $comefrom,$id) ;
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
window.location = 'donatelist.php'
</script>";