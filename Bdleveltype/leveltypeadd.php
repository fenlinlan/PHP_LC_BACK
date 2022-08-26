<!DOCTYPE html>
<html>

<head>
    <title>新增工作層級</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdadd.php" method="POST">
        <table align="center">
            <tr>
                <td>
                    層級稱呼：
                </td>
                <td>
                    <input name="name"  type="text">
                </td>
            </tr>
            <tr>
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