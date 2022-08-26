<!DOCTYPE html>
<html>

<head>
    <title>新增服務種類表單</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdadd.php" method="POST">
        <table align="center">
        <tr>
                <td>
                 服務類型編號：
                </td>
                <td>
                <input name="id" type="text" >
                </td>
            </tr>
            <tr>
                <td>
                服務類型名稱：
                </td>
                <td>
                    <input name="tname" type="text" >
                </td>
            </tr>
            <tr>
                <td>
                 服務應準備物品：
                </td>
                <td>
                    <input name="item" type="item" >
                </td>
            </tr>
            <tr>
                <td>
                 服務應準備價格：
                </td>
                <td>
                    <input name="price" type="text" >
                </td>
            </tr>
            <tr>
                <td>
                    服務時間(起)：
                </td>
                <td>
                <input name="timerange" type="text" >
                </td>
            </tr>
            <tr>
                <td>
                服務時間(訖)：
                </td>
                <td>
                <input name="deadrange" type="text" >
                </td>
            </tr>
            <tr>
                <td>
                 服務內容：
                </td>
                <td>
                    <input name="content" type="text">
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