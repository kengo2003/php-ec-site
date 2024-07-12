<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afterchange</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>アカウントが作成されました。</h1>

    <?php
        session_start();
        unset($_SESSION['id']);
        //追加
        $pdo=new PDO('mysql:host=localhost;dbname=r2a12315;charset=utf8','r2a12315',20030929);
        $sql=$pdo->prepare('insert into users values(null, ?, ?, ?, 0)');
        $sql->execute([$_POST['user'],$_POST['pass'],$_POST['dname']]);

        //参照
        $sql=$pdo->prepare('select * from users where u_name=? and u_pass=?');
        $sql->execute([$_POST['user'],$_POST['pass']]);

        $_SESSION['id'] = $_POST['user'];
        $_SESSION['dname'] = $_POST['dname'];

    ?>
    <br>
    <a href="main.php">商品一覧に進む</a>
    
</body>
</html>