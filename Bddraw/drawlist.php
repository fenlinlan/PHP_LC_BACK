<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>抽籤結果列表</title>

</head>

<body>
    <?php include "../title.php" ; ?>
    <?php
   	include("../Connections/comlib.php");		//使用資料庫的呼叫程式
   	include("../Connections/iotcnn.php");		//使用資料庫的呼叫程式
	$link=Connection();		//產生mySQL連線物件
	$phone = $_POST["phone"]  ;
	$qrystr="select * from LC.Draws where phone = %s ORDER BY crdtime ASC ;";
	$d01 = array();	
	$d02 = array();	
	$d03 = array();
	$d05 = array();
	$ans = sprintf($qrystr,$phone);
	$result=mysqli_query($link,$ans);
  if($result!==FALSE){
	 while($row = mysqli_fetch_array($result)) 
	 {
			array_push($d01, $row["id"]);
			array_push($d02, $row["drawtype"]);	
			array_push($d03, $row["number"]);	
			array_push($d05, $row["crdtime"]);
		}

  }
  mysqli_free_result($result);
  mysqli_close($link); 
?>
    </input>
    <form>
        <div align="center">
            <table border="1" align=center cellspacing="1" cellpadding="1">
                <tr>
                    <td align="centered">
                    Drawtype<br>(抽取籤種)</td>
					<td>Number<br>(獲得籤號)</td>
                    <td>Crdatetime<br>(資料上傳時間)</td>
                    <td>Operation<br>(管理功能)</td>
                </tr>
                <?php 
			 $row1="<tr>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>			 
			 </tr>";
			 $op1="<a href='drawadd.php'>新增</a>/<a href='drawdel.php?id=%d'>刪除</a>";
		 if(count($d01) >0)
		  {
				for($i=0 ;$i <count($d01)  ;$i=$i+1) 
					{
						$op = sprintf($op1,$d01[$i],$d01[$i]) ;
						echo sprintf($row1,  $d02[$i],$d03[$i],$d05[$i],$op);
					 }
		 }
      ?>


            </table>

        </div>
    </form>

    <?php
include '../footer.php';
?>

</body>

</html>