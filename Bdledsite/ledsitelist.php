<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>燈座列表</title>

</head>

<body>
    <?php include "../title.php" ; ?>

    <?php
 
   	include("../Connections/comlib.php");		//使用資料庫的呼叫程式
   	include("../Connections/iotcnn.php");		//使用資料庫的呼叫程式
	$link=Connection();		//產生mySQL連線物件
	


	$qrystr="select * from LC.Vledsite where 1 order by id asc ;";//, count(*) as cnt  from lcttrpg.dhtData where 1 group by MAC " ;		//將dhtdata的資料找出來
    //select......from  是查詢的功能，詳細需要再爬文確認;*號有特殊意義 ; 
	//orderby'條件'是將查找的資訊依條件排序;group by '條件'則是將條件項相同的排序在一起，但是只能應用char(字串)




	$d01 = array();	// declare blank array of d00
	$d02 = array();	// declare blank array of d01
	$d03 = array();
	$d04 = array();
	$d05 = array();
	$d06 = array();
	$d07 = array();
	$d08 = array();
	$d09 = array();
	//$d = array();

	$result=mysqli_query($link,$qrystr);		//將dhtdata的資料找出來(只找最後5

  if($result!==FALSE){
	 while($row = mysqli_fetch_array($result)) 
	 {
			array_push($d01, $row["id"]);		// $row[欄位名稱] 就可以取出該欄位資料
			//array_push($d, $row[""]);
			array_push($d02, $row["name"]);
			array_push($d03, $row["typename"]);
			array_push($d04, $row["godsname"]);
			array_push($d05, $row["price"]);
			array_push($d06, $row["local"]);
			array_push($d07, $row["content"]);
			array_push($d08, $row["amount"]);
			array_push($d09, $row["crdtime"]);

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
                    <td align="centered">Id<br>(燈座編號)</td>
                    <td>Name<br>(燈座名稱)</td>
                    <td>Type<br>(所屬燈種)</td>
					<td>Gods<br>(供奉神明)</td>
                    <td>Price<br>(點燈價格)</td>
					<td>Location<br>(所在宮殿位置)</td>
					<td>Content<br>(燈種介紹)</td>
					<td>Amount<br>(總燈數)</td>
                    <td>Crdtime<br>(資料上傳時間)</td>
                    <td>Operation<br>(管理功能)</td>
                </tr>

                <?php 

			 $row1="<tr>
			 <td>%d</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%d</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%d</td>
			 <td>%s</td>
			 <td>%s</td>
			 </tr>";
			 $op1="<a href='ledsiteadd.php'>新增</a>/<a href='ledsiteedit.php?sid=%s'>修改</a>/<a href='bddel.php?sid=%s'>刪除</a>/<a href='ledlight.php?sid=%s'>產生燈泡管理資料</a>";
		 if(count($d01) >0)
		  {
				for($i=0 ;$i <count($d01)  ;$i=$i+1) //$d01是帶入id資料
					{
						$op = sprintf($op1,$d01[$i],$d01[$i],$d01[$i]) ;
						echo sprintf($row1, $d01[$i], $d02[$i],$d03[$i],$d04[$i], $d05[$i], $d06[$i],$d07[$i],$d08[$i],$d09[$i],$op);
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