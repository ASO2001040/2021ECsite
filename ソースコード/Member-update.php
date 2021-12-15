
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

        <a href=""> <!-- 会員情報画面へ遷移 -->
            <button type="submit">キャンセル</button>
        </a>

<h3>会員情報変更</h3>
<form action="Member-update-input.php" method="post">
    更新する情報を選択してください
    <select name="date">
        <option value="">変更する情報を選択してください</option>
        <option value="0" name="name">お名前</option>
        <option value="1" name="address">住所</option>
        <option value="2" name="tel">電話番号</option>
    </select>

    <button type="submit">更新画面へ</button>

<hr>


<?php

//DB接続
$pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan;
                dbname=LAA1290595-school;charset=utf8',
    'LAA1290595',
    'Riemori4268');


echo '<h3>現在登録している個人情報</h3>';
echo '<hr>';
//DBから表示
$id=1;
foreach ($pdo -> query('select * from member') as $row) {
    echo '<p>顧客ID</p>';
    echo $row['user_id'];
    echo '<p>・お名前</p>';
    echo $row['name'];
    echo '<p>・住所</p>';
    echo $row['address'];
    echo '<p>・電話番号</p>';
    echo $row['tel'];
    $id = $row['user_id'];
}
$pdo = null;

?>
    <input type="hidden" name="id" value="<?=$id ?>">
</form>
    </div>
</div>

</body>
</html>

