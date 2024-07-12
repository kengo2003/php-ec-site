<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['every']) && isset($_POST['mail'])){
        echo 'お買い得情報のメールを毎日お送りさせていただきます';
    }elseif(isset($_POST['mail'])){
        echo 'お買い得情報のメールをお送りさせていただきます';
    }else{
        echo 'お買い得情報のメールはお送りさせていただきません';
    }
    ?>
    <br>
    <?php
    if(isset($_POST['mail'])){
        if(isset($_POST['every'])){
            echo 'お買い得情報のメールを毎日お送りさせていただきます';
        }else{
            echo 'お買い得情報のメールをお送りさせていただきます';
        }
    }else{
        echo 'お買い得情報のメールはお送りさせていただきません';
    }
    ?>

</body>
</html>