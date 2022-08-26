<!DOCTYPE html>
<html>

<head>
    <title>新增工作人員</title>
    <?php session_start();
   	include("../Connections/comlib.php");		//使用資料庫的呼叫程式
   	include("../Connections/iotcnn.php");		//使用資料庫的呼叫程式
		//	Connection() ;
  	$link=Connection();		//產生mySQL連線物件
    $sel1str = "select * from LC.Leveltype where 1 order by id asc " ;   //學歷檔的外來鍵 的SQL
    $sel1option = "<option value=%s >%s</option>" ;
    $result1 = mysqli_query($link,$sel1str);		//將dhtdata的資料找出來(只找最後5
?>

</head>

<body>
    <?php include '../title.php' ; ?>
    
    <form action="bdadd.php" method="POST">
        <table align="center">
            <tr>
                <td>
                    工作人員姓名：
                </td>
                <td>
                    <input type="hidden" name="id">
                    <input type="text" name="name" size="20">
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                    工作人員層級：
                </td>
                <td>
                <select name='leveltype' value="<?php echo $f3 ?>">
                        <?php
         if($result1!==FALSE)	//判斷是否有資料
            {
                while($row = mysqli_fetch_array($result1)) //每次抓一筆資料，有抓到資料傳回true， 沒有傳回false
                {
                    echo sprintf($sel1option,$row["id"],$row["name"]) ;
                    }
            }
            ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    工作人員電話：
                </td>
                <td>
                    <input type="text" name="phone" size="20">
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