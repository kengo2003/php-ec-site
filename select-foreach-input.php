<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>商品の色を選択してください。</p>
    <form action="select-foreach-output.php" method="post">
    <select name="color">
        <?php
        $color=['ホワイト','ブルー','レッド','イエロー','ブラック'];
        foreach($color as $c) {
            echo '<option value"',$c,'">',$c,'</option>';
        }
        ?>
    </select>
<p><input type="submit" value="確定"></p>
    </form>
</body>
</html>