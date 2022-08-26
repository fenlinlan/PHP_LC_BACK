<!DOCTYPE html>
<html>

<head>
    <title>新增行事曆資料</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdadd.php" method="POST">
        <table align="center">
        <tr>
            <td>
                行事曆標題：
            </td>
            <td>
                <input type="text" name="name" size="20" >
            </td>
            </tr>
            <tr>
                <td>
                    開始時間：
                </td>
                <td>
                <input type="text" name="timerange" >
            </tr>
            <tr>
            <tr>
            <td>
                結束時間：
            </td>
            <td>
                <input type="text" name="deadrange" >
            </td>
            </tr>
            <tr>
            <td>
                詳細說明：
            </td>
            <td>
                <textarea name="ps"></textarea>
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