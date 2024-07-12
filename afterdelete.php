<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afterchange</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        session_start();
        unset($_SESSION['id']);
        $pdo=new PDO('mysql:host=localhost;dbname=r2a12315;charset=utf8','r2a12315',20030929);
        $sql=$pdo->prepare('delete from users where u_name=? and u_pass=?');

        if ($sql->execute([$_POST['user'],$_POST['pass']])) {
            echo '<h1>アカウントが削除されました。</h1>';
        }else {
            echo '<h1>削除に失敗しました。</h1>';
        }

    ?>

    <br><a href="index.php">ログインページに戻る</a>
    
</body>
</html>