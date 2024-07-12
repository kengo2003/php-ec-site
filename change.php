<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>登録情報変更ページ</h1>
    <p>現在登録の情報</p>

    <table border="1">
        <tr><th>ユーザID</th><th>ユーザ名</th><th>パスワード</th><th>表示名</th></tr>
        <?php
         session_start();
         $pdo=new PDO('mysql:host=localhost;dbname=r2a12315;charset=utf8','r2a12315',20030929);
         $sql=$pdo->prepare('select * from users where u_id=?');
         $sql->execute([$_SESSION['id']]);
         foreach ($sql as $row) {
        ?>
        <tr>
            <td><?= $row['u_id'] ?></td>
            <td><?= $row['u_name'] ?></td>
            <td><?= $row['u_pass'] ?></td>
            <td><?= $row['u_dname'] ?></td>
        </tr>
        <form action="afterchange.php" method="post">
            <tr>
                <td>変更</td>
                <td><input type="text" name="user"></td>
                <td><input type="text" name="pass"></td>
                <td><input type="text" name="display"></td>
                <input type="submit" value="変更">
            </tr>
        </form>
        <?php
         }
        ?>
         
    </table>

</body>
</html>

<?php




?>