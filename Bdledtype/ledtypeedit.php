<?php session_start();?>
<?php
include("../Connections/comlib.php");
include("../Connections/iotcnn.php"); 
$link=Connection(); 

$sid = $_GET["sid"] ;

$qry1 = "select * from LC.Ledtype where id = %s  ;" ;      //SQL填空
$qrystr = sprintf($qry1,$sid) ;     // 組立要執行的SQL語法
//echo $qrystr."<br>" ;

$result=mysqli_query($link,$qrystr);        //執行sql語法
if($result!==FALSE)
{
    while($row = mysqli_fetch_array($result)) 
    {
        $f1 = $row["id"] ;
        $f2 = $row["name"] ;
        $f3 = $row["price"] ;
        $f4 = $row["content"] ;
        $f5 = $row["location"] ;
        $f6 = $row["godid"] ;
    }
}

$sel1str = "select * from LC.Temple where 1 order by id asc " ;   //學歷檔的外來鍵 的SQL
$sel1str2 = "select * from LC.Gods where 1 order by id asc " ;
$sel1option = "<option value=%s >%s</option>" ;
$result1 = mysqli_query($link,$sel1str);
$result2 = mysqli_query($link,$sel1str2);		//將dhtdata的資料找出來(只找最後5

?>





<!DOCTYPE html>
<html>

<head>
    <title>編輯燈種資料</title>

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
                    <input type="hidden" name="sid" size="20" value=<?php echo $f1 ; ?>>
                    <input type="text" name="id" size="20" value=<?php echo $f1 ; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    燈種名稱：
                </td>
                <td>
                    <input type="text" name="name" size="20" value=<?php echo $f2 ; ?>>
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                    燈種價格：
                </td>
                <td>
                    <input type="number" name="price" size="40" value=<?php echo $f3 ; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    燈種說明：
                </td>
                <td>
                    <input type="text" name="content" size="40" value=<?php echo $f4 ; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    所在宮殿：
                </td>
                <td>
                    <select name='location' value='<?php echo $f5  ?>'>
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
                    供奉神明：
                </td>
                <td>
                    <select name="godid" value='<?php echo $f6  ?>'>
                        <?php
                                 if($result2!==FALSE)
                                    {
                                        while($row = mysqli_fetch_array($result2)) 
                                        {
                                            echo sprintf($sel1option,$row["id"],$row["name"]) ;
                                            }
                                    }
                                    ?>
                    </select>
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