<!DOCTYPE html>
<html>

<head>
    <title>新增點燈表資料</title>

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
                <input type="hidden" name="id" size="20"  >
                    <input type="text" name="ledtype" size="20"  >
                </td>
            </tr>
            <tr>
                <td>
                    點燈人姓名：
                </td>
                <td>
                    <input type="text" name="name" size="20">
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                    點燈人性別：
                </td>
                <td>
                    <select  name="sex">
                    <option value="01">男性</option>
                    <option value="02">女性</option>        
                    </select>
                </td>
            </tr>
            <tr>
            <td>
                    點燈人電話：
                </td>
                <td>
                    <input type="text" name="phone" size="40" >
                </td>
            </tr>
            <tr>
                <td>
                    點燈人誕辰：
                </td>
                <td>
                <input type="date" name="brithday" size="40" >
                </td>
            </tr>
                <td>
                    總點燈燈數：
                </td>
                <td>
                    <input type="text" name="total" size="40">
                </td>
            </tr>
            <tr>
                <td>
                    付款人姓名（查詢時所用）：
                </td>
                <td>
                <input type="text" name="bookingname" size="40">
                </td>
            </tr>
            <tr>
                <td>
                    點燈總燈數：
                </td>
                <td>
                    <input type="number" name="maxled" size="40" >
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