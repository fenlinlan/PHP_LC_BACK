<!DOCTYPE html>
<html>

<head>
    <title>新增新聞資料</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdadd.php" method="POST">
        <table align="center">
        <tr>
            <td>
                新聞標題：
            </td>
            <td>
                <input type="text" name="name" size="20" >
            </td>
            </tr>
            <tr>
                <td>
                    新聞內文：
                </td>
                <td>
                    <textarea name='content' ></textarea>
            </tr>
            <tr>
            <tr>
            <td>
                新聞作者：
            </td>
            <td>
                <input type="text" name="writer" size="20" >
            </td>
            </tr>
            <tr>
            <td>
                新聞相片:
            </td>
            <td>
                <input type="text" name="photo" size="20" >
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