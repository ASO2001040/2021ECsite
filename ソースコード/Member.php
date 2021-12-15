
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

        <div style="display: inline-table">
            <table>
                <tr>
                    <td><button onclick="location.href='検索.php'">検索</button></td>
                    <td><button onclick="location.href='新着.php'">新着商品</button></td>
                    <td><button onclick="location.href='人気.php'">人気商品</button></td>
                    <td><button onclick="location.href='セール.php'">セール</button></td>
                    <td><button onclick="location.href='カート.php'">カート</button></td>
                    <td><button onclick="location.href='会員情報.php'">会員情報</button></td>
                </tr>
            </table>
        </div>

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

<a href="Member-update.php">
    <button type="submit">内容を変更する</button>
</a>


    </div>
</div>

</body>
</html>

