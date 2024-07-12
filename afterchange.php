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
    $pdo=new PDO('mysql:host=localhost;dbname=r2a12315;charset=utf8','r2a12315',20030929);
    $sql=$pdo->prepare('update users set u_name=?, u_pass=?, u_dname=? where u_id=?');
    $sql->execute([$_POST['user'], $_POST['pass'], $_POST['display'], $_SESSION['id']]);
    ?>
    <h1>情報が変更されました。</h1>

    <a href="main.php">商品一覧に戻る</a>
    
</body>
</html>