<?php session_start();?>

<?php 
   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
  	$link=Connection();	
	 $id = $_POST["id"]  ;
	 $name = $_POST["name"] ;
	 $leveltype = $_POST["leveltype"] ;
	 $phone = $_POST["phone"] ;
$qry1 = "insert into  LC.Staff (id,name,leveltype,phone) values ('%d','%s','%s','%s');";
$qrystr = sprintf($qry1,$id,$name,$leveltype,$phone) ;
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

window.location = 'stafflist.php'
</script>";