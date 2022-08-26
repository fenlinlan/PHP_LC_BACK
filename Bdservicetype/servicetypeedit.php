<?php session_start();?>
<?php
include("../Connections/comlib.php");
include("../Connections/iotcnn.php"); 
$link=Connection(); 
$id = $_GET["id"] ;
$qry1 = "select * from LC.Servicetype where id = %s  ;" ; 
$qrystr = sprintf($qry1,$id) ; 
$result=mysqli_query($link,$qrystr);
if($result!==FALSE)
{
    while($row = mysqli_fetch_array($result)) 
    {
        {

			$f2 =  $row["tname"]	;
            $f7 =  $row["item"]	;
            $f3 =  $row["price"]	;
            $f4 =  $row["timerange"]	;
            $f5 =  $row["deadrange"]	;
            $f6 =  $row["content"]	;
            
		}
} 
}        
mysqli_close($link); 
?>
<!DOCTYPE html>
<html>

<head>
    <title>編輯服務類型資料</title>
</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdedit.php" method="POST">
        <table align="center">
            <tr>
                <td>
                 服務類型編號：
                </td>
                <td>
                <input name="id" type="text" value='<?php echo $id ; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                服務類型名稱：
                </td>
                <td>
                    <input name="tname" type="text" value='<?php echo $f2 ; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                 服務應準備物品：
                </td>
                <td>
                    <input name="item" type="text" value='<?php echo $f7 ; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                 服務應準備價格：
                </td>
                <td>
                    <input name="price" type="text" value='<?php echo $f3 ; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                    服務時間(起)：
                </td>
                <td>
                    <input type="text" name="timerange" size="20" value='<?php echo $f4 ; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                服務時間(訖)：
                </td>
                <td>
                    <input type="text" name="deadrange" size="20" value='<?php echo $f5 ; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                 服務內容：
                </td>
                <td>
                    <input name="content" type="text" value='<?php echo $f6 ; ?>'>
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