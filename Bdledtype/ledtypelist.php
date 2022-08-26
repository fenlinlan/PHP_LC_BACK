<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>燈種列表</title>

</head>

<body>
    <?php include "../title.php" ; ?>

    <?php
 
   	include("../Connections/comlib.php");		//使用資料庫的呼叫程式
   	include("../Connections/iotcnn.php");		//使用資料庫的呼叫程式
	$link=Connection();		//產生mySQL連線物件
	


	$qrystr="select * from LC.VLedtype where 1 order by id asc ;";//, count(*) as cnt  from lcttrpg.dhtData where 1 group by MAC " ;		//將dhtdata的資料找出來
    //select......from  是查詢的功能，詳細需要再爬文確認;*號有特殊意義 ; 
	//orderby'條件'是將查找的資訊依條件排序;group by '條件'則是將條件項相同的排序在一起，但是只能應用char(字串)




	$d01 = array();	// declare blank array of d00
	$d02 = array();	// declare blank array of d01
	$d03 = array();
	$d04 = array();
	$d05 = array();
	$d06 = array();
	$d07 = array();
	//$d = array();

	$result=mysqli_query($link,$qrystr);		//將dhtdata的資料找出來(只找最後5

  if($result!==FALSE){
	 while($row = mysqli_fetch_array($result)) 
	 {
			array_push($d01, $row["id"]);		// $row[欄位名稱] 就可以取出該欄位資料
			//array_push($d, $row[""]);
			array_push($d02, $row["name"]);
			array_push($d03, $row["godsname"]);
			array_push($d04, $row["price"]);
			array_push($d05, $row["local"]);
			array_push($d06, $row["content"]);
			array_push($d07, $row["updtime"]);

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
                    <td align="centered">Id<br>(燈種代碼)</td>
                    <td>Name<br>(燈種名稱)</td>
                    <td>Gods<br>(供奉神明)</td>
					<td>Price<br>(點燈價格)</td>
                    <td>Location<br>(燈種所在宮殿)</td>
					<td>Content<br>(燈種介紹)</td>
                    <td>Updtime<br>(資料上傳時間)</td>
                    <td>Operation<br>(管理功能)</td>
                </tr>

                <?php 

			 $row1="<tr>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%d</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>
			 </tr>";
			 $op1="<a href='ledtypeadd.php'>新增</a>/<a href='ledtypeedit.php?sid=%s'>修改</a>/<a href='bddel.php?sid=%s'>刪除</a>";
		 if(count($d01) >0)
		  {
				for($i=0 ;$i <count($d01)  ;$i=$i+1) //$d01是帶入id資料
					{
						$op = sprintf($op1,$d01[$i],$d01[$i]) ;
						echo sprintf($row1, $d01[$i], $d02[$i],$d03[$i],$d04[$i], $d05[$i], $d06[$i],$d07[$i],$op);
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