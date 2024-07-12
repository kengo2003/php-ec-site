<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
<h1>注文内容を確認</h1>
<form action="order.php" method="post">
    <table border="1">
        <tr><th>郵便番号：</th><td><?= $_POST['post'] ?></td></tr>
        <input type="hidden" name="post" value="<?= $_POST['post'] ?>">
        <tr><th>住所：</th><td><?= $_POST['add'] ?></td></tr>
        <input type="hidden" name="add" value="<?= $_POST['add'] ?>">
        <tr><th>氏名：</th><td><?= $_POST['name'] ?></td></tr>
        <input type="hidden" name="name" value="<?= $_POST['name'] ?>">
        <tr><th>電話番号：</th><td><?= $_POST['num'] ?></td></tr>
        <input type="hidden" name="num" value="<?= $_POST['num'] ?>">
        <tr><th>支払方法：</th><td><?= $_POST['pay'] ?></td></tr>
        <input type="hidden" name="pay" value="<?= $_POST['pay'] ?>">
    </table>
    <br><input type="submit"  value="注文を確定" id="btn">
</form>
    <br><br>

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
    <a href="register.php">配送先入力に戻る</a>
        
    <script type="text/javascript">
        btn.onclick = () => {
            alert("注文を確定してもよろしいでしょうか？")
        };
    </script>
</body>
</html>