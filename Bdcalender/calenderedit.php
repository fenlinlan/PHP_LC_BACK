<?php session_start();?>
<?php
include("../Connections/comlib.php");
include("../Connections/iotcnn.php"); 
$link=Connection(); 
$id = $_GET["id"] ;
$qry1 = "select * from LC.Calendar where id = %d  ;" ; 
$qrystr = sprintf($qry1,$id) ; 
$result=mysqli_query($link,$qrystr);
if($result!==FALSE)
{
    while($row = mysqli_fetch_array($result)) 
    {
        $f2 = $row["name"] ;
        $f4 = $row["timerange"] ;
        $f5 = $row["deadrange"] ;
        $f6 = $row["ps"] ;
    }
}         
mysqli_close($link); 
?>
<!DOCTYPE html>
<html>

<head>
    <title>編輯行事曆資料</title>
</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdedit.php" method="POST">
        <table align="center">
            <tr>
                <td>
                    行事曆標題：
                </td>
                <td>
                    <input type="hidden" name="id" value='<?php echo $id ?>'>
                    <input type="text" name="name" size="20" value='<?php echo $f2 ?>'>
                </td>
            </tr>
            <tr>
                <td>
                   開始時間：
                </td>
                <td>
                    <textarea name='timerange' value=' <?php echo $f4 ?>'></textarea>
            </tr>
            <tr>
            <tr>
                <td>
                    結束時間：
                </td>
                <td>
                    <input type="text" name="deadrange"  value='<?php echo $f5 ?>'>
                </td>
            </tr>
            <tr>
                <td>
                    詳細說明相片:
                </td>
                <td>
                    <textarea  name="ps" ><?php echo $f6 ?></textarea>
                </td>
            </tr>
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