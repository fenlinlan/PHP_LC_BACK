<?php session_start();?>

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
//  INSERT INTO `Donate` (id, name, phone, money, ps, comefrom) VALUES ('%d', '%s', '%s', '%d', '%s', '%s');	
$qry1 = "insert into  LC.Donate (id, name, phone, money, ps, comefrom) VALUES ('%d', '%s', '%s', '%d', '%s', '%s');";
$qrystr = sprintf($qry1,$id,$name,$phone,$money,$ps,$comefrom) ;
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

window.location = 'donatelist.php'
</script>";