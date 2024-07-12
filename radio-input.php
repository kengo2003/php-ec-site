<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    お食事を選択してください
    <form action="radio-output.php" method="post">
        <p><input type="radio" name="meal" value="和食" checked>和食</p>
        <p><input type="radio" name="meal" value="洋食">洋食</p>
        <p><input type="radio" name="meal" value="中華">中華</p>
        <p><input type="submit" value="確定"></p>
    </form>
</body>
</html>