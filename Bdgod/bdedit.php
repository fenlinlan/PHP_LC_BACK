<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>修改神明資料</title>
</head>
<body>
    <?php include '../title.php' ; ?>
    <?php
   	include("../Connections/comlib.php");	
   	include("../Connections/iotcnn.php");	
  	$link=Connection();	


	  $name = $_POST["name"] ;
	  $location = $_POST["location"] ;
	  $pic = $_POST["file"] ;
	  //Boxes (id,name,location)
$qry1 = "update LC.Gods set   name = '%s' , location='%s',pic='%s'  where id = '%s'" ;	
$qrystr = sprintf($qry1 ,$name,$location,$pic,$id) ;
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
window.location = 'godlist.php'
</script>";