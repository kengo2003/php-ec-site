<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>配送先入力</h1>
    <form action="check.php" method="post">
        <table border="1">
            <tr><th>郵便番号：</th><td><input type="text" name="post"></td></tr>
            <tr><th>住所：</th><td><input type="text" name="add"></td></tr>
            <tr><th>氏名：</th><td><input type="text" name="name"></td></tr>
            <tr><th>電話番号：</th><td><input type="text" name="num"></td></tr>
            <tr><th>支払方法：</th><td><input type="text" name="pay"></td></tr>
        </table>
        <br>
        <input type="submit" value="注文内容確認に進む">
        <br><br>
    </form>

    <table border="1">
        <tr><th>商品番号</th><th>商品名</th><th>価格</th><th>購入数</th><th>小計</th></tr>
        
        <?php
            session_start();

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
    <a href="main.php">商品一覧へ戻る</a>

</body>
</html>