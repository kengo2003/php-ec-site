<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>商品番号
    <?php echo $_GET['id']; ?>
    の詳細</h1>

    <?php
        session_start();
        echo 'ようこそ',$_SESSION['dname'] ,'さん';
    ?>
    <table border="1">
        <tr><th>商品番号</th><th>商品名</th><th>価格</th><th>フラグ</th></tr>
        
        <!-- 商品一覧
        <?php
         //$pdo=new PDO('mysql:host=localhost;dbname=r2a12315;charset=utf8','r2a12315',20030929);
         //foreach ($pdo->query('select * from products where id=?') as $row) {
        ?>
        <tr>
            <td><?= $row['p_id'] ?> </td>
            <td><?= $row['p_name'] ?></td>
            <td><?= $row['p_price'] ?></td>
            <td><?= $row['p_flag'] ?></td>
        </tr>
        -->

        <!-- ログイン画面コード
        $sql=$pdo->prepare('select * from users where u_name=? and u_pass=?');
        $sql->execute([$_POST['user'],$_POST['pass']]);
        foreach ($sql as $row) {
        $_SESSION['id'] = $row['u_id'];
        $_SESSION['dname'] = $row['u_dname'];
        }-->
        <!--選択した商品だけ-->

        <?php
            $pdo=new PDO('mysql:host=localhost;dbname=r2a12315;charset=utf8','r2a12315',20030929);
            $sql=$pdo->prepare('select * from products where p_id=?');
            $sql->execute([$_GET['id']]);
            foreach ($sql as $row) {
        ?>
        <br>
        <img src="image/<?= $row['p_id'] ?>.jpg">

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
    <br>

    <form action="cart.php" method="post">
        <p>購入数</p>
        <input type="text" name="count">
        <input type="hidden" name="pid" value="<?= $row['p_id'] ?>">
        <input type="submit" value="カートに入れる">
    </form>

</body>
</html>