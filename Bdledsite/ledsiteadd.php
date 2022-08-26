<?php session_start();
   	include("../Connections/comlib.php");		//使用資料庫的呼叫程式
   	include("../Connections/iotcnn.php");		//使用資料庫的呼叫程式
		//	Connection() ;
  	$link=Connection();		//產生mySQL連線物件
    $sel1str = "select * from LC.Ledtype where 1 order by id asc " ;   //學歷檔的外來鍵 的SQL
    $sel1option = "<option value=%s >%s</option>" ;
    $result1 = mysqli_query($link,$sel1str);		//將dhtdata的資料找出來(只找最後5
?>

<!DOCTYPE html>
<html>

<head>
    <title>新增燈座資料</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdadd.php" method="POST">
        <table align="center">
            <tr>
                <td>
                    燈座名稱：
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                    所屬燈種：
                </td>
                <td>
                    <select name="typeid">
                        <?php

                 while($row = mysqli_fetch_array($result1)) //每次抓一筆資料，有抓到資料傳回true， 沒有傳回false
                 {
                     echo sprintf($sel1option,$row["id"],$row["name"]) ;
                     }
                       ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    總燈數：
                </td>
                <td>
                    <input type="number" name="amount">
                </td>
            </tr>
            <tr>
                <td align="center">
                    <input type="reset" name="清除">
                </td>
                <td align="center">
                    <input type="submit" name="送出">
                </td>
            </tr>

        </table>

    </form>

    <?php include '../footer.php' ; ?>
</body>

</html>