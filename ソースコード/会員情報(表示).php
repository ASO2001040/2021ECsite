
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<hr>
<?php

//DB接続
$pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan;
                dbname=LAA1290595-school;charset=utf8',
    'LAA1290595',
    'Riemori4268');


echo '<h3>会員情報</h3>';
echo '<hr>';
//DBから表示
foreach ($pdo -> query('select * from member') as $row) {
    echo '<p>顧客ID</p>';
    echo $row['user_id'];
    echo '<p>・お名前</p>';
    echo $row['name'];
    echo '<p>・住所</p>';
    echo $row['address'];
    echo '<p>・電話番号</p>';
    echo $row['tel'];
    echo '<P>メールアドレス</P>';
    echo $row['mail'];
}
$pdo = null;

?>

</body>
</html>

