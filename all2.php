<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pdo=new PDO('mysql:host=localhost;dbname=r2a12315;charset=utf8','r2a12315',20030929);
    foreach ($pdo->query('select * from products') as $row) {
        echo '<p>';
        echo $row['p_id'],':';
        echo $row['p_name'],':';
        echo $row['p_price'],':';
        echo $row['p_flag'];
        echo '</p>';
    }
    ?>
</body>
</html>