<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<div style="text-align: center">
    <h1>Ishin</h1>
    <div style="text-align: center">

<?php

//DB接続
$pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan;
                dbname=LAA1290595-school;charset=utf8',
    'LAA1290595',
    'Riemori4268');

$id=htmlspecialchars($_POST['id']);
$sql = $pdo->prepare('update member set name= ? where user_id = ?');
$sql->bindValue(1,htmlspecialchars($_POST['name']),PDO::PARAM_STR);
$sql->bindValue(2,$id,PDO::PARAM_STR);
$sql->execute();

if($sql->rowCount()>0) {
    echo '<p>更新完了</p>';
    echo '<a href="">';
    echo '<button type="submit">会員情報画面へ</button>';
    echo '</a>';
    echo '<a href="">';
    echo '<button type="submit">TOPへ</button>';
    echo '</a>';
}else {
    echo '<p>更新エラー</p>';
    echo '<a href="Member-update.php">更新画面へ</a>';
    echo '<a href="">';
    echo '<button type="submit">会員情報画面へ</button>';
    echo '</a>';
    echo '</p>';
}
?>

</body>

</html>