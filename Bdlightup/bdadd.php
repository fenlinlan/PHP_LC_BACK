<?php session_start();?>
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

$qry1 = "insert into  LC.Lightup (name,ledtype,sex,phone,brithday,total,bookingname) values ('%s','%s','%s','%s','%s','%d','%s');";
$qrystr = sprintf($qry1, $name,$ledtype,  $sex,$phone,$brithday ,$total,$bookingname ) ;
echo $qrystr."<br>" ;

$result = mysqli_query($link,$qrystr);		//執行sql語法
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
window.location = 'lightuplist.php'
</script>";