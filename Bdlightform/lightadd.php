<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>點燈表單</title>
    <?php
   	include("../Connections/comlib.php");	
   	include("../Connections/iotcnn.php");	
    $link=Connection();
    $sel1str = "select * from LC.Ledtype where 1 order by id asc " ;   //學歷檔的外來鍵 的SQL
    $sel1option = "<option value=%s >%s</option>" ;
    $result1 = mysqli_query($link,$sel1str);	

?>
</head>

<body>
    <?php include '../title.php' ; ?>
<form action="dbadd.php" method="POST">
    <table align="center">
        <tr>
            <td>
                選擇點燈種類：
            </td>
            <td>
            <select name="typeid">
            <?php
                   while($row = mysqli_fetch_array($result1))
                  {
                   echo sprintf($sel1option,$row["id"],$row["name"]) ;
                  }
                 ?>
            </select>
               
            </td>
        </tr>
        <tr>
            <td>
                點燈人姓名：
            </td>
            <td>
                <input type="text" name="donater">
            </td>
        </tr>
        <tr>
            <td>
                點燈人誕辰：
            </td>
            <td>
                <input type="date" name="brithday">
            </td>
        </tr>
        <tr>
            <td>
                點燈人電話：
            </td>
            <td>
                <input type="text" name="phone">
            </td>
        </tr>
        <tr>
            <td>
               <input type="reset" value="清除資料">
            </td>
            <td>
            <input type="submit" value="送出資料"> 
            </td>
        </tr>
    </table>
    <?php include '../footer.php'; ?>
    </form>
</body>

</html>