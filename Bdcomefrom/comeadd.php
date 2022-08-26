<!DOCTYPE html>
<html>

<head>
    <title>新增經費來源</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdadd.php" method="POST">
        <table align="center">
        <tr>
                <td>
                    來源編號：
                </td>
                <td>
                    <input type="text" name="id" size='3'>
                </td>
            </tr>
            <tr>
                <td>
                    來源名稱：
                </td>
                <td>
                    <input type="text" name="name" size="20">
                </td>
            </tr>
            <tr>
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