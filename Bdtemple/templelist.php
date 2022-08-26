<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>宮殿列表</title>

</head>

<body>
    <?php include "../title.php" ; ?>

    <?php
 
   	include("../Connections/comlib.php");		//使用資料庫的呼叫程式
   	include("../Connections/iotcnn.php");		//使用資料庫的呼叫程式
	$link=Connection();		//產生mySQL連線物件
	


	$qrystr="select * from LC.Temple where 1 order by id asc ;";




	$d01 = array();	// declare blank array of d00
	$d02 = array();	// declare blank array of d01
	$d03 = array();
	$d04 = array();
	$d06 = array();
	$d07 = array();
	$d08 = array();
	$d09 = array();

	
	$result=mysqli_query($link,$qrystr);		//將dhtdata的資料找出來(只找最後5

  if($result!==FALSE){
	 while($row = mysqli_fetch_array($result)) 
	 {
			array_push($d01, $row["id"]);		// $row[欄位名稱] 就可以取出該欄位資料
			array_push($d02, $row["name"]);	// array_push(某個陣列名稱,加入的陣列的內容
			array_push($d03, $row["crdtime"]);
		}// 會跳下一列資料

  }
  mysqli_free_result($result);   // 關閉資料集
 
  mysqli_close($link);       // 關閉連線
 

?>
    <!--<input type ="button" onclick="history.back()" value="BACK(回到上一頁)">-->
    </input>
    <form>


        <div align="center">
            <table border="1" align=center cellspacing="1" cellpadding="1">
                <tr>
                    <td align="centered">ID<br>(宮殿代號)</td>
                    <td>Localname<br>(宮殿名稱)</td>
                    <td>Crdatetime<br>(資料上傳時間)</td>
                    <td>Operation<br>(管理功能)</td>
                </tr>


                <?php 

			 $row1="<tr>
			 <td>%d</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>			 
			 </tr>";
		//	 $op1="<a href='memberadd.php'>新增</a>/<a href='memberedt.php?sid=%d'>修改</a>/<a href='dbdel.php?sid=%d'>刪除</a>" ;
			 $op1="<a href='templeadd.php'>新增</a>/<a href='templeedit.php?id=%s'>修改</a>/<a href='templedel.php?id=%s'>刪除</a>";
		 if(count($d01) >0)
		  {
				for($i=0 ;$i <count($d01)  ;$i=$i+1) //$d01是帶入id資料
					{
						$op = sprintf($op1,$d01[$i],$d01[$i]) ;
						echo sprintf($row1, $d01[$i], $d02[$i],$d03[$i],$op);
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