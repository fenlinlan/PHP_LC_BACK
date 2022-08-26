<?php session_start();?>
<?php
include("../Connections/comlib.php");
include("../Connections/iotcnn.php"); 
$link=Connection(); 
$id = $_GET["id"] ;
$qry1 = "select * from LC.Donate where id = %d  ;" ; 
$qrystr = sprintf($qry1,$id) ; 
$result=mysqli_query($link,$qrystr);
if($result!==FALSE)
{
    while($row = mysqli_fetch_array($result)) 
    {
        $f1 = $row["name"] ;
        $f2 = $row["phone"] ;
        $f3 = $row["money"] ;
        $f4 = $row["ps"] ;
        $f5 = $row["comefrom"] ;

    }
}         
mysqli_close($link); 
?>
<!DOCTYPE html>
<html>

<head>
    <title>編輯捐贈表</title>
</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdedit.php" method="POST">
        <table align="center">
        <tr>
                <td>
                    捐贈人名稱：
                </td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $id ?>" >
                    <input type="text" name="name" size="20" value="<?php echo $f1 ?>">
                </td>
            </tr>
            <tr>
                <td>
                    捐贈人電話：
                </td>
                <td>
                    <input type="text" name="phone" size="20" value="<?php echo $f2 ?>">
                </td>
            </tr>
            <tr>
                <td>
                    捐贈金額：
                </td>
                <td>
                    <input type="number" name="money" value="<?php echo $f3 ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    給廟方的話：
                </td>
                <td>
                    <textarea name="ps" value="<?php echo $f4 ?>"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    捐贈來源（線上線下）
                </td>
                <td>
                    <select name="comefrom" value="<?php echo $f5 ?>">
                    <option value="01">線上</option> 
                    <option value="02">線下</option>       
                    </select>
                </td>
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