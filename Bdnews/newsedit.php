<?php session_start();?>
<?php
include("../Connections/comlib.php");
include("../Connections/iotcnn.php"); 
$link=Connection(); 
$id = $_GET["id"] ;
$qry1 = "select * from LC.News where id = %d  ;" ; 
$qrystr = sprintf($qry1,$id) ; 
$result=mysqli_query($link,$qrystr);
if($result!==FALSE)
{
    while($row = mysqli_fetch_array($result)) 
    {
        $f2 = $row["name"] ;
        $f4 = $row["content"] ;
        $f5 = $row["writer"] ;
        $f6 = $row["photo"] ;
    }
}         
mysqli_close($link); 
?>
<!DOCTYPE html>
<html>

<head>
    <title>編輯新聞資料</title>
</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdedit.php" method="POST">
        <table align="center">
            <tr>
                <td>
                    新聞標題：
                </td>
                <td>
                    <input type="hidden" name="id" value='<?php echo $id ?>'>
                    <input type="text" name="name" size="20" value='<?php echo $f2 ?>'>
                </td>
            </tr>
            <tr>
                <td>
                    新聞內文：
                </td>
                <td>
                    <textarea name='content' value=' <?php echo $f4 ?>'></textarea>
            </tr>
            <tr>
            <tr>
                <td>
                    新聞作者：
                </td>
                <td>
                    <input type="text" name="writer" size="20" value='<?php echo $f5 ?>'>
                </td>
            </tr>
            <tr>
                <td>
                    新聞相片:
                </td>
                <td>
                    <input type="text" name="photo" size="20" value='<?php echo $f6 ?>'>
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