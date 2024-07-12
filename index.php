<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログインページ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>ログイン</h1>
    <h2>ユーザ名とパスワードを入力してください</h2>
    <form action="login.php" method="post">
        <p>ユーザ名：<input type="text" name="user"></p>
        <p>パスワード：<input type="password" name="pass"></p>
        <p><input type="submit" value="ログイン"></p>
        <p>アカウントをお持ちですか？<a href="new.php">新規作成</a></p>
    </form>
</body>
</html>