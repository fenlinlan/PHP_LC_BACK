<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>修改點燈表單資料</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <?php
   	include("../Connections/comlib.php");	
   	include("../Connections/iotcnn.php");	
  	$link=Connection();	
	  $id = $_POST["id"]  ;
	  $name = $_POST["name"] ;
	  $ledtype = $_POST["ledtype"] ;
	  $sex = $_POST["sex"]  ;
	  $phone = $_POST["phone"] ;
	  $brithday = $_POST["brithday"] ;
	  $total = $_POST["total"] ;
	  $bookingname = $_POST["bookingname"] ;

$qry1 = "update  LC.Lightup set  id = '%d', name = '%s', ledtype = '%s' ,sex='%s',phone='%s',brithday='%s',total='%d', bookingname='%s' where id = '%d' " ;		//SQL填空
$qrystr = sprintf($qry1,$id, $name,$ledtype, $sex ,$phone,$brithday,$total,$bookingname,$id) ;		// 組立要執行的SQL語法
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
}

 
mysqli_close($link);
?>
    <?php include '../footer.php' ; ?>
</body>

</html>
<script>

window.location = 'lightuplist.php'
</script>";