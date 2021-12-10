<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>top-in</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div style="text-align: center">
    <h1>Ishin</h1>
    <?php
    $pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan;
                dbname=LAA1290595-school;charset=utf8',
        'LAA1290595',
        'Riemori4268');

    $mail = $_POST['mail'];
    $sql = $pdo->prepare('select * from member where mail = ?');
    $sql->bindValue(1,$mail,PDO::PARAM_STR);
    $sql->execute();
    $resultList = $sql->fetch(PDO::FETCH_ASSOC);

    $sql = $pdo->prepare('update member set mail = ?');
    $sql->bindValue(1,htmlspecialchars($_POST['mail']),PDO::PARAM_STR);
    $sql->execute();
    if($sql->rowCount()>0){
        echo'<p>メールアドレスを変更しました</p>';
    }else{
        echo'<p>変更エラー</p>';
    }
    $pdo = null;
    ?>
    <p>会員情報よりご確認ください</p>
    <table>
        <tr>
            <td><button onclick="location.href='会員情報.php'" style="width:100px;height:50px">会員ページ</button></td>
            <td><button onclick="location.href='top.php'" style="width:100px;height:50px">TOP</button></td>
        </tr>
        <div>
</body>
</html>
