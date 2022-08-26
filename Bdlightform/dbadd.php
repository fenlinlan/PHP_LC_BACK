<?php session_start();?>
<?php

   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
  	$link=Connection();

//  $ = $POST[""];
$typeid =  $_POST['typeid'];
$donater =  $_POST["donater"];
$brithday =  $_POST["brithday"];
$phone =  $_POST["phone"];


//  UPDATE `Ledsitelist` SET `donater` = '賴維哲', `dbirthday` = '2022-07-03', `dphone` = '0955555555', `dueday` = '2023-07-03' WHERE `Ledsitelist`.`id` = 18;
$qryans = " update LC.Ledsitelist set donater = '%s', dbirthday = '%s', dphone = '%s' , dueday= '%s' where  Ledsitelist.id = '%s'  ";
$search = "SELECT * FROM LC.VsiteDetail as a WHERE a.typeid = '%s' and a.donater IS NULL ORDER by a.id  asc  LIMIT 1" ;
//SELECT * FROM VsiteDetail as a WHERE a.typeid = '01' and a.donater IS NULL ORDER by a.id asc  LIMIT 1
//select * from  sitedetial as a  where a.typeid = 01 AND a.donater = NULL 
//SELECT * FROM `sitedetial` WHERE sitedetial.siteid = "11"
//  select * from sitedetial as a   where a.typeid = '01' order by a.siteid  ,a.no ASC
$serans = sprintf($search,$typeid);
$result = mysqli_query($link,$serans);         //執行sql語法
//echo $result;
if($result!==FALSE)
{
   while($row = mysqli_fetch_array($result)) 
    {
        $f1 = $row["id"] ;
    }
}else{
    $f1 = FALSE;
}
;

if($f1==FALSE){
    echo '本類燈種資料尚未建置完成，請24小時後再次嘗試，非常感謝。'; 
}  else { 
        $dueday  = date("Y-m-d",strtotime('1 year'));
    $anses = sprintf($qryans,$donater,$brithday,$phone,$dueday,$f1);
    $result1 = mysqli_query($link,$anses);
    echo $anses;
    }






?>
<?php include '../footer.php' ; ?>
</body>

</html>
<script>
window.location = 'lightlist.php'
</script>";