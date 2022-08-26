<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>產生燈泡資料</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <?php
//delete from fcu.user WHERE user.id = %d
//delete from fcu.user WHERE user.id = %d
   	include("../Connections/comlib.php");		//使用資料庫的呼叫程式
   	include("../Connections/iotcnn.php");		//使用資料庫的呼叫程式
		//	Connection() ;
  	$link=Connection();		//產生mySQL連線物件

 $sid = $_GET["sid"]  ;
 $qry = "select * from LC.Ledsite where id = %d  ;" ;      //SQL填空
 $qrystr = sprintf($qry,$sid) ;     // 組立要執行的SQL語法
 $result=mysqli_query($link,$qrystr);        //執行sql語法
 $i = 0;
 if($result!==FALSE)
 {
     while($row = mysqli_fetch_array($result)) 
     {
         $f2 = $row["name"] ;
         $f3 = $row["typeid"] ;
         $f4 = $row["amount"] ;
     }
 }




//  INSERT INTO `Ledsitelist` (`id`, `siteid`, `no`, `donater`, `dbirthday`, `dphone`, `dueday`, `updtime`) VALUES (NULL, '02', '001', NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
$qry1 = "insert into LC.Ledsitelist  (id,siteid,no,donater,dbirthday,dphone,dueday) values (NULL,'%s',%d,NULL,NULL,NULL,NULL) ";

		//執行sql語法

while ($i <$f4) {
$i = $i+1;
$ans = sprintf($qry1,$sid,strzero($i,3));
//echo $ans;
$result2=mysqli_query($link,$ans); 
}


//mysqli_free_result($result);	// 關閉資料集
 
mysqli_close($link);		// 關閉連線
?>
    <?php include '../footer.php' ; ?>
</body>

</html>
<script>
// 這一區
// php would run before javascript
// better solution to catch error
// ajax request in led.php request for this lamp.php than handle alert() based on callback
window.location = 'ledsitelist.php'
</script>