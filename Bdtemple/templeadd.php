<!DOCTYPE html>
<html>

<head>
    <title>新增宮殿資料</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdadd.php" method="POST">
        <table align="center">
        <tr>
                <td>
                    宮殿代號：
                </td>
                <td>
                    <input name="id" type="text" >
                </td>
            </tr>
            <tr>
                <td>
                    宮殿名稱：
                </td>
                <td>
                    <input type="text" name="name" size="20">
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