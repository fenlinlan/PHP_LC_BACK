<?php session_start();?>
<?php
include("../Connections/comlib.php");
include("../Connections/iotcnn.php"); 
$link=Connection(); 
$sid = $_GET["sid"] ;
$qry1 = "select * from LC.Leveltype where id = %d  ;" ; 
$qrystr = sprintf($qry1,$sid) ; 
$result=mysqli_query($link,$qrystr);
if($result!==FALSE)
{
    while($row = mysqli_fetch_array($result)) 
    {
        $f2 = $row["name"] ;
        $f5 = $row["crdtime"] ;
    }
}         
mysqli_close($link); 
?>
<!DOCTYPE html>
<html>

<head>
    <title>編輯宮殿資料</title>
</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdedit.php" method="POST">
        <table align="center">

            <tr>
                <td>
                工作層級稱呼：
                </td>
                <td>
                <input name="id" type="hidden" value=<?php echo $sid ; ?>>
                <input name="name" type="text"  value=<?php echo $f2 ; ?>>
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