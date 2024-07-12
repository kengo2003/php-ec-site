<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP Sample Programs</title>
    </head>
    <body>
    <?php
        echo $_POST['price'],'円×';
        echo $_POST['count'],'個=';
        echo $price*$count,'円';
    ?>
    </body>
</html>