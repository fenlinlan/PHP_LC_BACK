<!DOCTYPE html>
<html>

<head>
    <title>新增香油箱資料</title>

</head>

<body>
    <?php include '../title.php' ; ?>
    <form action="bdadd.php" method="POST">
        <table align="center">
            <tr>
                <td>
                    香油箱名稱：
                </td>
                <td>
                    <input type="hidden" name="id">
                    <input type="text" name="name" size="20">
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                香油箱所在宮殿：
                </td>
                <td>
                    <select name="location">
                        <option value=01>一樓正殿媽祖殿</option>
                        <option value=02>一樓後殿聖父母</option>
                        <option value=03>一樓西側太歲殿</option>
                        <option value=04>二樓西側月老殿</option>
                        <option value=05>二樓西側華陀殿</option>
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