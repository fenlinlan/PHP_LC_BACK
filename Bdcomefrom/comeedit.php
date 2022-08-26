<?php session_start();?>
<?php
include("../Connections/comlib.php");
include("../Connections/iotcnn.php"); 
$link=Connection(); 
$sid = $_GET["sid"] ;
$qry1 = "select * from LC.Comefrom where id = %s  ;" ; 
$qrystr = sprintf($qry1,$sid) ; 
$result=mysqli_query($link,$qrystr);
if($result!==FALSE)
{
    while($row = mysqli_fetch_array($result)) 
    {
        $f2 = $row["name"] ;
    }
}         
mysqli_close($link); 
?>
<!DOCTYPE html>
<html>

<head>
    <title>編輯資金來源資料</title>
</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdedit.php" method="POST">
        <table align="center">
        <tr>
                <td>
                   資金來源代號：
                </td>
                <td>
                    <input  name="sid" value= '<?php echo $sid ?>'>
                </td>
            </tr>
        <tr>
                <td>
                    資金來源名稱：
                </td>
                <td>
                    <input type="text" name="name" size="20" value= '<?php echo $f2 ?>'>
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