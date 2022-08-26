<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>修改新聞資料</title>
</head>
<body>
    <?php include '../title.php' ; ?>
    <?php
   	include("../Connections/comlib.php");	
   	include("../Connections/iotcnn.php");	
  	$link=Connection();	

	  $id = $_POST["id"]  ;
	  $name = $_POST["name"] ;
	  $content = $_POST["content"] ;
	  $writer = $_POST["writer"] ;
	  $photo = $_POST["photo"] ;

//update LC.News set id='99', name = '%s' , content ='759678', writer ='5555', photo ='11' where id = 4;
$qry1 = "update LC.News set  id='%d', name = '%s' , content ='%s', writer ='%s', photo ='%s' where id = '%d'" ;	
$qrystr = sprintf($qry1, $id ,$name,$content,$writer,$photo,$id) ;
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
window.location = 'newslist.php'
</script>";