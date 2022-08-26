<?php session_start();
   	include("../Connections/comlib.php");		//使用資料庫的呼叫程式
   	include("../Connections/iotcnn.php");		//使用資料庫的呼叫程式
		//	Connection() ;
  	$link=Connection();		//產生mySQL連線物件
    $sel1str = "select * from LC.Draws where 1 order by id asc " ;   //學歷檔的外來鍵 的SQL
    $sel1option = "<option value=%s >%s</option>" ;
    $result1 = mysqli_query($link,$sel1str);		//將dhtdata的資料找出來(只找最後5
?>

<!DOCTYPE html>
<html>

<head>
    <title>新增籤詩資料</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdadd.php" method="POST">
        <table align="center">
            <tr>
                <td>
                    查詢電話：
                </td>
                <td>
                    <input type="text" name="phone" size="20">
                </td>
            </tr>
            <tr>
                <td>
                    抽取籤種：
                </td>
                <td>
                    <select name='drawtype'>
                        <option value="媽祖靈籤">媽祖靈籤</option>
                        <option value="月老靈籤">月老靈籤</option>
                    </select>
            </tr>
            <tr>
                <td>
                    獲得籤號：
                </td>
                <td>
                    <input type="number" name="number">
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