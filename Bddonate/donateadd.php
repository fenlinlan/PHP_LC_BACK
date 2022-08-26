<!DOCTYPE html>
<html>

<head>
    <title>新增捐贈表單</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdadd.php" method="POST">
        <table align="center">
        <tr>
                <td>
                    捐贈人名稱：
                </td>
                <td>
                    <input type="hidden" name="id" >
                    <input type="text" name="name" size="20">
                </td>
            </tr>
            <tr>
                <td>
                    捐贈人電話：
                </td>
                <td>
                    <input type="text" name="phone" size="20">
                </td>
            </tr>
            <tr>
                <td>
                    捐贈金額：
                </td>
                <td>
                    <input type="number" name="money" >
                </td>
            </tr>
            <tr>
                <td>
                    給廟方的話：
                </td>
                <td>
                    <textarea name="ps"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    捐贈來源（線上線下）
                </td>
                <td>
                    <select name="comefrom">
                    <option value="01">線上</option> 
                    <option value="02">線下</option>       
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