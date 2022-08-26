<?php session_start();?>
<?php
include("../Connections/comlib.php");
include("../Connections/iotcnn.php"); 
$link=Connection(); 
$id = $_GET["id"] ;
$qry1 = "select * from LC.Gods where id = %s  ;" ; 
$qrystr = sprintf($qry1,$id) ; 
$result=mysqli_query($link,$qrystr);
if($result!==FALSE)
{
    while($row = mysqli_fetch_array($result)) 
    {
        $f2 = $row["name"] ;
        $f3 = $row["location"] ;
        $f4 = $row["pic"] ;
    }
}         

$sel1str = "select * from LC.Temple where 1 order by id asc " ;   //學歷檔的外來鍵 的SQL
$sel1option = "<option value=%s >%s</option>" ;
$result1 = mysqli_query($link,$sel1str);	

mysqli_close($link); 
?>
<!DOCTYPE html>
<html>

<head>
    <title>編輯香油箱資料</title>
</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdedit.php" method="POST">
        <table align="center">
            <td>
                神明尊稱：
            </td>
            <td>
                <input type="hidden" name="id" value='<?php echo $id ?>'>
                <input type="text" name="name" size="20" value='<?php echo $f2 ?>'>
            </td>
            </tr>
            <tr>
                <td>
                    重新上傳圖片:
                </td>
                <td>
                    <input type="file" name="file">
                </td>
            </tr>
            <tr>
                <td>
                    主供神像所在宮殿：
                </td>
                <td>
                    <select name='location' value="<?php echo $f3 ?>">
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