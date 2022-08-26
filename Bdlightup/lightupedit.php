<?php session_start();?>
<?php
include("../Connections/comlib.php");
include("../Connections/iotcnn.php"); 
$link=Connection(); 

$sid = $_GET["sid"] ;

$qry1 = "select * from LC.Lightup where id = %s  ;" ;      //SQL填空
$qrystr = sprintf($qry1,$sid) ;     // 組立要執行的SQL語法
//echo $qrystr."<br>" ;

$result=mysqli_query($link,$qrystr);        //執行sql語法
if($result!==FALSE)
{
    while($row = mysqli_fetch_array($result)) 
    {
        $f1 = $row["id"] ;
        $f2 = $row["ledtype"] ;
        $f3 = $row["name"] ;
        $f4 = $row["sex"] ;
        $f5 = $row["phone"] ;
        $f8 = $row["brithday"] ;
        $f6 = $row["total"] ;
        $f7 = $row["bookingname"] ;
         //$f7 = $row["updtime"] ;
    }
}         



mysqli_close($link);        // 關閉連線
?>


<!DOCTYPE html>
<html>

<head>
    <title>編輯點燈表單資料</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <!-- <a href="login.php">-->
    <form action="bdedit.php" method="POST">
        <table align="center">
        <tr>
                <td>        
                    燈種代碼：
                </td>
                <td>
                <input type="hidden" name="id" size="20"  value=<?php echo $f1 ; ?>>
                    <input type="text" name="ledtype" size="20"  value=<?php echo $f2 ; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    點燈人姓名：
                </td>
                <td>
                    <input type="text" name="name" size="20" value='<?php echo $f3 ; ?>'>
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                    點燈人性別：
                </td>
                <td>
                    <select  value="<?php echo $f4 ; ?>" name="sex">
                    <option value="01">男性</option>
                    <option value="02">女性</option>        
                    </select>
                </td>
            </tr>
            <td>
                    點燈人電話：
                </td>
                <td>
                    <input type="text" name="phone" size="40" value="<?php echo $f5 ; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    點燈人誕辰：
                </td>
                <td>
                    <input type="date" name="brithday" size="40" value="<?php echo $f8 ; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    總點燈燈數：
                </td>
                <td>
                    <input type="number" name="total" size="40" value="<?php echo $f6; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    付款人姓名（查詢時所用）：
                </td>
                <td>
                <input type="text" name="bookingname"  value="<?php echo $f7 ; ?>">
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