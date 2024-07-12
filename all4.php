<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr><th>商品番号</th><th>商品名</th><th>価格</th><th>フラグ</th></tr>
        <?php
         $pdo=new PDO('mysql:host=localhost;dbname=r2a12315;charset=utf8','r2a12315',20030929);
         foreach ($pdo->query('select * from products') as $row) {
        ?>
        <tr>
            <td><?= $row['p_id'] ?> </td>
            <td><?= $row['p_name'] ?></td>
            <td><?= $row['p_price'] ?></td>
            <td><?= $row['p_flag'] ?></td>
        </tr>
        <?php
         }
        ?>
         
    </table>
</body>
</html>