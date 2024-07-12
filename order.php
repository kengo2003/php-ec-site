<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>ご注文ありがとうございました</h1>
    
    <?php
    session_start();
    //echo '郵便番号：', $_POST['post'];
    //echo '住所：', $_POST['add'];
    //echo '氏名：', $_POST['name'];
    //echo '電話番号：', $_POST['num'];
    //echo '支払方法：', $_POST['pay'];

    // $cart = $_SESSION['cart'];
    // print_r($cart);
    //print_r($_SESSION['cart']);
    //echo 'ユーザID',$_SESSION['id'];
    $pdo=new PDO('mysql:host=localhost;dbname=r2a12315;charset=utf8','r2a12315',20030929);
    $sql=$pdo->prepare('insert into orders values (null,?,?,?,?,?,?,0)');
    $sql->execute([$_SESSION['id'],$_POST['post'],$_POST['add'],$_POST['name'],$_POST['num'],$_POST['pay']]);
    //orders表への挿入
    $oid = $pdo->lastInsertId();
    echo '注文番号',$oid;

    //details表への挿入
    $sql=$pdo->prepare('insert into details values (?,?,?,0)');
    foreach($_SESSION['cart'] as $key=>$value){
        $sql->execute([$oid,$key,$value]);
    }

    unset($_SESSION['cart']);

    ?>
    <br>
    <a href="main.php">商品一覧へ戻る</a>

</body>
</html>
