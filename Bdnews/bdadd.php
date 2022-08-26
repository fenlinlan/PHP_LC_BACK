<?php session_start();?>

<?php 
   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
  	$link=Connection();	

	
	  $name = $_POST["name"] ;
	  $content = $_POST["content"] ;
	  $writer = $_POST["writer"] ;
	  $photo = $_POST["photo"] ;
	
$qry1 = "insert into  LC.News (name,content,writer,photo) values ('%d','%s','%s','%s');";
$qrystr = sprintf($qry1,$name,$content,$writer,$photo) ;
echo $qrystr."<br>" ;
$result = mysqli_query($link,$qrystr);
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

window.location = 'newslist.php'
</script>";