<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>點燈表單列表</title>

</head>

<body>
    <?php include "../title.php" ; ?>

    <?php
   	include("../Connections/comlib.php");
   	include("../Connections/iotcnn.php");
	$link=Connection();	

	$qrystr="select * from LC.Lightup where 1 order by id asc ;";

	$d01 = array();	
	$d02 = array();
	$d03 = array();
	$d04 = array();
	$d05 = array();
	$d06 = array();
	$d07 = array();
	$d08 = array();
	$d09 = array();
	$result=mysqli_query($link,$qrystr);

  if($result!==FALSE){
	 while($row = mysqli_fetch_array($result)) 
	 {
			array_push($d01, $row["id"]);
			array_push($d02, $row["ledtype"]);
			array_push($d03, $row["name"]);
			array_push($d04, $row["sex"]);
			array_push($d05, $row["phone"]);
			array_push($d06, $row["brithday"]);
			array_push($d07, $row["total"]);
			array_push($d08, $row["bookingname"]);
			array_push($d09, $row["updtime"]);
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
                    <td align="centered">Id<br>(點燈表編號)</td>
                    <td>Ledtype<br>(燈種代碼)</td>
                    <td>Name<br>(點燈人姓名)</td>
					<td>Sex<br>(點燈人性別)</td>
					<td>Phonet<br>(點燈人電話)</td>
                    <td>Brithday<br>(點燈人誕辰)</td>
					<td>Total<br>(本筆點燈數)</td>
                    <td>Bookingname<br>(付款人姓名)</td>
                    <td>Updatatime<br>(資料上傳時間)</td>
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
			 <td>%d</td>
			 <td>%s</td>
			 <td>%s</td>
			 <td>%s</td>
			 </tr>";
			 $op1="<a href='lightupadd.php'>新增</a>/<a href='lightupedit.php?sid=%s'>修改</a>/<a href='bddel.php?sid=%s'>刪除</a>";
		 if(count($d01) >0)
		  {
				for($i=0 ;$i <count($d01)  ;$i=$i+1) //$d01是帶入id資料
					{
						$op = sprintf($op1,$d01[$i],$d01[$i]) ;
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