<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>服務類型列表</title>

</head>

<body>
    <?php include "../title.php" ; ?>
    <?php
   	include("../Connections/comlib.php");		//使用資料庫的呼叫程式
   	include("../Connections/iotcnn.php");		//使用資料庫的呼叫程式
	$link=Connection();		//產生mySQL連線物件
	$qrystr="select * from LC.Servicetype where 1 order by id asc ;";
	$d01 = array();	
	$d02 = array();	
	$d03 = array();
	$d04 = array();
	$d05 = array();
	$d06 = array();
	$d07 = array();
	$d08 = array();
	$result=mysqli_query($link,$qrystr);
  if($result!==FALSE){
	 while($row = mysqli_fetch_array($result)) 
	 {
			array_push($d01, $row["id"]);
			array_push($d02, $row["tname"]);	
			array_push($d03, $row["item"]);	
			array_push($d04, $row["price"]);	
			array_push($d05, $row["timerange"]);
			array_push($d06, $row["deadrange"]);	
			array_push($d07, $row["content"]);	
			array_push($d08, $row["crdtime"]);		
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
                    <td align="centered">ID<br>(服務項目代號)</td>
                    <td>Name<br>(服務姓名)</td>
					<td>Iteme<br>(服務應準備項目)</td>
					<td>Price<br>(服務價格)</td>
					<td>timerange<br>執行時間(起)</td>
					<td>timerange<br>執行時間(訖)</td>
					<td>Content<br>說明</td>
                    <td>Crdatetime<br>(資料上傳時間)</td>
                    <td>Operation<br>(管理功能)</td>
                </tr>
                <?php 
			 $row1="<tr>
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
			 $op1="<a href='servicetypeadd.php'>新增</a>/<a href='servicetypeedit.php?id=%d'>修改</a>/<a href='servicetypedel.php?id=%d'>刪除</a>";
		 if(count($d01) >0)
		  {
				for($i=0 ;$i <count($d01)  ;$i=$i+1) 
					{
						$op = sprintf($op1,$d01[$i],$d01[$i]) ;
						echo sprintf($row1, $d01[$i], $d02[$i],$d03[$i],$d04[$i],$d05[$i],$d06[$i],$d07[$i],$d08[$i],$op);
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