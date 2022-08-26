<?php session_start();?>
<?php

   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
  	$link=Connection();
	  //$id = $_POST["id"]  ;
	  $name = $_POST["name"] ;
	  $typeid = $_POST["typeid"] ;
	  $amount = $_POST["amount"]  ;
	  $length = strlen($amount);
$i = 0;

$qry1 = "insert into  LC.Ledsite (id,name,typeid,amount) values (NULL,'%s','%s','%d');";
$qrystr = sprintf($qry1, $name,$typeid,$amount) ;
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
window.location = 'ledsitelist.php'
</script>";