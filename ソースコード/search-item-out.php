<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>


<div style="text-align: center">
    <h1>Ishin</h1>   <!-- 店名 -->

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


<?php

    //DB接続
    $pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan;
                    dbname=LAA1290595-school;charset=utf8',
        'LAA1290595',
        'Riemori4268');

    //DBからクリックした商品の詳細画面
    $sql=$pdo->prepare('select * from commodity where ID=?');
    $sql->execute([$_REQUEST['id']]);

    foreach ($sql as $row) {
        echo '<tr>';
        echo '<p><input type="image" src="img/', $row['ID'], '.jpg"></p>';
        echo '<td>', $row['commodity_name'], '</td>';//商品名
        echo '<p>';
        echo '<td>', '税込','¥','',number_format($row['money']), '</td>','</p>';//価格
        echo '<td>', '<p>', $row['ex_text'], '</p>', '</td>';//商品説明

        //サイズ選択
        echo '<h3>';
        echo '<select name="size">';
        echo '<option value="0">S</option>';
        echo '<option value="1">M</option>';
        echo '<option value="2">L</option>';
        echo '<option value="3">LL</option>';
        echo '</select>','</h3>';


        //カート
        echo '<h3>';
        echo '<button type="submit">';
        echo 'カートに入れる';
        echo '</button>','</h3>';



        echo '</tr>';
        echo "\n";
    }


?>

<?php

echo '<h3>';

//ホスト名取得
$h = $_SERVER['HTTP_HOST'];

// リファラ値があれば、かつ外部サイトでなければaタグで戻るリンクを表示
if (!empty($_SERVER['HTTP_REFERER']) && (strpos($_SERVER['HTTP_REFERER'],$h) !== false)) {
    echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">前に戻る</a>';
}

echo '</h3>';

?>

</div>
</body>
</html>
