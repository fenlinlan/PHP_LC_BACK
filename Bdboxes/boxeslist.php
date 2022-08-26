<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>香油箱列表</title>

</head>

<body>
    <?php include "../title.php" ; ?>
    <?php
   	include("../Connections/comlib.php");		//使用資料庫的呼叫程式
   	include("../Connections/iotcnn.php");		//使用資料庫的呼叫程式
	$link=Connection();		//產生mySQL連線物件
	$qrystr="select * from LC.Boxes where 1 order by id asc ;";
	$d01 = array();	
	$d02 = array();	
	$d03 = array();
	$d05 = array();
	$result=mysqli_query($link,$qrystr);
  if($result!==FALSE){
	 while($row = mysqli_fetch_array($result)) 
	 {
			array_push($d01, $row["id"]);
			array_push($d02, $row["name"]);	
			array_push($d03, $row["location"]);	
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
                    <td align="centered">ID<br>(香油箱代號)</td>
                    <td>Name<br>(香油箱名稱)</td>
					<td>Location<br>(香油箱所在宮殿)</td>
                    <td>Crdatetime<br>(資料上傳時間)</td>
                    <td>Operation<br>(管理功能)</td>
                </tr>
                <?php 
			 $row1="<tr>
			 <td>%d</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>			 
			 </tr>";
			 $op1="<a href='boxesadd.php'>新增</a>/<a href='boxesedit.php?sid=%d'>修改</a>/<a href='boxesdel.php?sid=%d'>刪除</a>";
		 if(count($d01) >0)
		  {
				for($i=0 ;$i <count($d01)  ;$i=$i+1) 
					{
						$op = sprintf($op1,$d01[$i],$d01[$i]) ;
						echo sprintf($row1, $d01[$i], $d02[$i],$d03[$i],$d05[$i],$op);
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