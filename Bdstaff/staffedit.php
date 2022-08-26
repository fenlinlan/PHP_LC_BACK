<?php session_start();?>
<?php
include("../Connections/comlib.php");
include("../Connections/iotcnn.php"); 
$link=Connection(); 
$sid = $_GET["sid"] ;
$qry1 = "select * from LC.Staff where id = %d  ;" ; 
$qrystr = sprintf($qry1,$sid) ; 
$result=mysqli_query($link,$qrystr);
if($result!==FALSE)
{
    while($row = mysqli_fetch_array($result)) 
    {
        $f2 = $row["name"] ;
        $f3 = $row["leveltype"] ;
        $f4 = $row["phone"] ;
        $f5 = $row["crdtime"] ;
    }
}         
$sel1str = "select * from LC.Leveltype where 1 order by id asc " ;   //學歷檔的外來鍵 的SQL
$sel1option = "<option value=%s >%s</option>" ;
$result1 = mysqli_query($link,$sel1str);	

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
                 工作人員姓名：
                </td>
                <td>
                <input name="sid" type="hidden" value=<?php echo $sid ; ?>>
                    <input name="name" type="text" value=<?php echo $f2 ; ?>>
                </td>
            </tr>
            <tr>
                <td>
                    工作人員層級：
                </td>
                <td>
                <select name='leveltype' value="<?php echo $f3 ?>">
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
                    工作人員電話：
                </td>
                <td>
                    <input type="text" name="phone" size="20" value=<?php echo $f4 ; ?>>
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