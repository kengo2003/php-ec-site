<?php
session_start();
unset($_SESSION['id']);
    $pdo=new PDO('mysql:host=localhost;dbname=r2a12315;charset=utf8','r2a12315',20030929);
    $sql=$pdo->prepare('select * from users where u_name=? and u_pass=?');
    $sql->execute([$_POST['user'],$_POST['pass']]);
    
    foreach ($sql as $row) {
        $_SESSION['id'] = $row['u_id'];
        $_SESSION['dname'] = $row['u_dname'];
    }
    if(isset($_SESSION['id'])){
        header('Location: ./main.php');
    }else{
        header('Location: ./index.php');
    }
?>