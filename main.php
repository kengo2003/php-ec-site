<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>main</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>斉藤商店</h1>
    <a href="logout.php">ログアウト</a>・
    <a href="change.php">登録情報変更</a>・
    <a href="delete.php">アカウント削除</a><br>

    <?php
        session_start();
        echo 'ようこそ',$_SESSION['dname'] ,'さん';
    ?>
    <!--商品一覧-->
    <table border="1">
        <tr><th>商品番号</th><th>商品名</th><th>価格</th><th>フラグ</th></tr>
        <?php
         $pdo=new PDO('mysql:host=localhost;dbname=r2a12315;charset=utf8','r2a12315',20030929);
         foreach ($pdo->query('select * from products') as $row) {
        ?>
        <tr>
            <td><?= $row['p_id'] ?></td>
            <td><a href="detail.php?id=<?= $row['p_id'] ?>"><?= $row['p_name'] ?></a></td>
            <td><?= $row['p_price'] ?></td>
            <td><?= $row['p_flag'] ?></td>
        </tr>
        <?php
         }
        ?>
         
    </table>
</body>
</html>