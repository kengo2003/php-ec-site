<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>購入数を選択してください。</p>
    <form action="select-for-output.php" method="post">
        <select name="count">
            <?php
            $i=0;
            while($i<10) {
                echo '<option value="',$i,'">',$i,'</option>';
                $i++;
            }
            ?>
        </select>
        <p><input type="submit" value="確定"></p>
    </form>
</body>
</html>