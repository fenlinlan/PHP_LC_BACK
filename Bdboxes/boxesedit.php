<?php session_start();?>
<?php
include("../Connections/comlib.php");
include("../Connections/iotcnn.php"); 
$link=Connection(); 
$sid = $_GET["sid"] ;
$qry1 = "select * from LC.Boxes where id = %d  ;" ; 
$qrystr = sprintf($qry1,$sid) ; 
$result=mysqli_query($link,$qrystr);
if($result!==FALSE)
{
    while($row = mysqli_fetch_array($result)) 
    {
        $f2 = $row["name"] ;
        $f3 = $row["location"] ;
    }
}         
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
            <tr>
                <td>
                    香油箱名稱：
                </td>
                <td>
                    <input type="hidden" name="sid" value='<?php echo $sid ?>'>
                    <input type="text" name="name" size="20" value='<?php echo $f2 ?>'>
                </td>
            </tr>
            <tr>
                <td>
                    香油箱所在宮殿：
                </td>
                <td>
                    <select name="location" value='<?php echo $f3 ?>'>
                        <option value=01>一樓正殿媽祖殿</option>
                        <option value=02>一樓後殿聖父母</option>
                        <option value=03>一樓西側太歲殿</option>
                        <option value=04>二樓西側月老殿</option>
                        <option value=05>二樓西側華陀殿</option>
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