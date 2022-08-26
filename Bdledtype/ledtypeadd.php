<?php session_start();
   	include("../Connections/comlib.php");		//使用資料庫的呼叫程式
   	include("../Connections/iotcnn.php");		//使用資料庫的呼叫程式
		//	Connection() ;
  	$link=Connection();		//產生mySQL連線物件
    $sel1str = "select * from LC.Temple where 1 order by id asc " ;   //學歷檔的外來鍵 的SQL
    $sel1option = "<option value=%s >%s</option>" ;
    $result1 = mysqli_query($link,$sel1str);		//將dhtdata的資料找出來(只找最後5
    $sel1str2 = "select * from LC.Gods where 1 order by id asc " ;
    $sel1option = "<option value=%s >%s</option>" ;
    $result2 = mysqli_query($link,$sel1str2);	



?>

<!DOCTYPE html>
<html>

<head>
    <title>新增燈種資料</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdadd.php" method="POST">
        <table align="center">
            <tr>
                <td>
                    燈種代碼：
                </td>
                <td>
                    <input type="text" name="id" size="20">
                </td>
            </tr>
            <tr>
                <td>
                    燈種名稱：
                </td>
                <td>
                    <input type="text" name="name" size="20">
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                    燈種價格：
                </td>
                <td>
                    <input type="number" name="price" size="40">
                </td>
            </tr>
            <tr>
                <td>
                    燈種說明：
                </td>
                <td>
                    <input type="text" name="content" size="40">
                </td>
            </tr>
            <tr>
                <td>
                    所在宮殿：
                </td>
                <td>
                    <select name='location'>
                        
                    
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
                   <select name="godid" >
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