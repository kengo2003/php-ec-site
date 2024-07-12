<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>カート内容</h1>



    <table border="1">
        <tr><th>商品番号</th><th>商品名</th><th>価格</th><th>購入数</th><th>小計</th></tr>
        
        <?php
            session_start();
            $_SESSION['cart'][$_POST['pid']] = $_POST['count'];

            $pdo=new PDO('mysql:host=localhost;dbname=r2a12315;charset=utf8','r2a12315',20030929);
            $sql=$pdo->prepare('select * from products where p_id=?');
            $sum = 0;

            foreach($_SESSION['cart'] as $key=>$value){
                $sql->execute([$key]);
                foreach ($sql as $row) {
        ?>
        <tr>
            <?php
                $sum = $sum + $row['p_price']*$value 
            ?>
            <td><?= $key ?></td>
            <td><?= $row['p_name'] ?></td>
            <td><?= $row['p_price'] ?></td>
            <td><?= $value ?></td>
            <td><?= $row['p_price']*$value ?></td>
        </tr>
        <?php
                }
            }
        ?>
        <tr><th>合計</th><td><?= $sum ?></td></tr>
    </table>
    <br>
    <a href="register.php">レジへ進む</a>
    
</body>
</html>
