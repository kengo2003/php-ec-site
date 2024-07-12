<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP Sample Programs</title>
    </head>
    <body>
        <p>お名前を入力してください</p>
        <form action="price-output.php" method="post">
            単価：<input type="text" name="price"> 円
            ×
            数量：<input type="text" name="count"> 個
            <input type="submit" value="計算">
        </form>
    </body>
</html>