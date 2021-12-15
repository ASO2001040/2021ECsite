
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

        <a href="">　<!-- 会員情報変更画面へ  -->
            <button type="submit">キャンセル</button>
        </a>



<?php

//DB接続
$pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan;
                dbname=LAA1290595-school;charset=utf8',
    'LAA1290595',
    'Riemori4268');

$date = $_POST['date'];
$id = $_POST['id'];

//名前の変更

if ($date == "0") {

        echo '<form action="Member-update-name.php" method="post">';
        echo '<p>新しく登録するお名前</p>';
        echo '<input type="text" name="name">';
        echo '<input type="hidden" name="id" value="',$id, '">';
        echo '<p><button type="submit">この内容で変更</button></p>';
//住所変更
}elseif ($date == "1") {
        echo '<form action="Member-update-address.php" method="post">';
        echo '<p>新しく登録する住所</p>';
        echo '<input type="text" name="address">';
        echo '<input type="hidden" name="id" value="',$id, '">';
        echo '<p><button type="submit">この内容で変更</button></p>';
//電話番号変更
} elseif ($date == "2") {
    echo '<form action="Member-update-tel.php" method="post">';
    echo '<p>新しく登録する電話番号</p>';
    echo '<p>ハイフン｢-｣無しで記入してください</p>';
    echo '<input type="tel" name="tel">';
    echo '<input type="hidden" name="id" value="',$id, '">';
    echo '<p><button type="submit">この内容で変更</button></p>';

}


?>



</body>
</html>
