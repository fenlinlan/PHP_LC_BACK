<?php session_start();?>
<?php
include("../Connections/comlib.php");
include("../Connections/iotcnn.php"); 
$link=Connection(); 

$sid = $_GET["sid"] ;

$qry1 = "select * from LC.Ledsite where id = %d  ;" ;      //SQL填空
$qrystr = sprintf($qry1,$sid) ;     // 組立要執行的SQL語法
//echo $qrystr."<br>" ;
    $sel1str = "select * from LC.Ledtype where 1 order by id asc " ;   //學歷檔的外來鍵 的SQL
    $sel1option = "<option value=%s >%s</option>" ;
    $result1 = mysqli_query($link,$sel1str);	
$result=mysqli_query($link,$qrystr);        //執行sql語法
if($result!==FALSE)
{
    while($row = mysqli_fetch_array($result)) 
    {
        $f2 = $row["name"] ;
        $f3 = $row["typeid"] ;
        $f4 = $row["amount"] ;
    }
}

$sel1str = "select * from LC.Ledtype where 1 order by id asc " ;   //學歷檔的外來鍵 的SQL
$sel1option = "<option value=%s >%s</option>" ;
$result1 = mysqli_query($link,$sel1str);	

mysqli_close($link);        // 關閉連線
?>


<!DOCTYPE html>
<html>

<head>
    <title>編輯燈座資料</title>
</head>
<body>
    <?php include '../title.php' ; ?>
    <!-- <a href="login.php">-->
    <form action="bdedit.php" method="POST">
        <table align="center">
        <tr>
                <td>
                    燈座名稱：
                </td>
                <td>
                <input type="hidden" name="id" value="<?php echo $sid ?>">
                    <input type="text" name="name" value="<?php echo $f2 ?>">
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                    所屬燈種：
                </td>
                <td>
                    <select name="typeid" value="<?php echo $f3 ?>">
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
                <td >
                    總燈數：
                </td>
                <td>
                    <input type="number" name="amount" value="<?php echo $f4 ?>">
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