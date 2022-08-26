<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>燈座列表</title>

</head>

<body>
    <?php include "../title.php" ; ?>

    <?php
   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
	$link=Connection();	
	$qrystr="select * from LC.VsiteDisplay where 1 order by Ledid asc ;";
	
    $d01 = array();	
	$d02 = array();	
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
			array_push($d01, $row["Ledid"]);		// $row[欄位名稱] 就可以取出該欄位資料
			//array_push($d, $row[""]);
			array_push($d02, $row["typename"]);
			array_push($d03, $row["name"]);
			array_push($d04, $row["local"]);
			array_push($d05, $row["donater"]);
			array_push($d06, $row["dbirthday"]);
			array_push($d07, $row["dphone"]);
            array_push($d08, $row["updtime"]);
			array_push($d09, $row["dueday"]);

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
                    <td align="centered">LedId<br>(燈泡編號)</td>
                    <td>SiteName<br>(燈座名稱)</td>
                    <td>TypeName<br>(所屬燈種)</td>
					<td>Location<br>(所在宮殿位置)</td>
                    <td>Name<br>(點燈人姓名)</td>
					<td>Brithday<br>(點燈人誕辰)</td>
					<td>Phone<br>(點燈人電話)</td>
					<td>LightDay<br>(點燈日)</td>
                    <td>DueDay<br>(點燈到期日)</td>
                    <td>Operation<br>(管理功能)</td>
                </tr>

                <?php 

			 $row1="<tr>
			 <td>%d</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>
			 </tr>";
			 $op1="<a href='lightadd.php'>我要點燈</a>";
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