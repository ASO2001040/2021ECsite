<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<?php

//DB接続
$pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan;
                    dbname=LAA1290595-school;charset=utf8',
    'LAA1290595',
    'Riemori4268');

?>

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
    //検索フォームから入力したワードをDBに保存
    $word = $_POST['keyword'];

    $sql = $pdo->prepare('insert into earch_words(words) value ?');
    $sql -> bindValue(1,$_POST['keyword'],PDO::PARAM_STR);
    $sql -> execute();


    ?>

    <?php

        echo '<table>';

        echo '<br>';
        echo '検索ワードに該当するものを表示しています';
        echo '<hr>';

        //DBから検索結果を表示
        if (isset($_REQUEST['keyword'])) {
            $sql = $pdo->prepare('select * from commodity where commodity_name like ?');
            $sql->execute(['%'.$_REQUEST['keyword'].'%']);
        } else {
            $sql=$pdo->prepare('select * from commodity');
            $sql->execute([]);
        }

        //商品一覧
        foreach ($sql as $row) {
            $id=$row['ID'];
            echo '<tr>';
            echo '<td>';
            echo '<p><input type="image" src="img/', $id, '.jpg"></p>';
            echo '<a href="search-item.php? id=', $id, '">',$row['commodity_name'], '</a>';
            echo '<p>','税込','¥','',number_format($row['money']),'</p>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';

        $pdo = null;  

    ?>

    <?php
        //商品検索画面へ
        echo '<a href="search-input.php">';
        echo '検索画面へ','</a>';

    ?>
</body>

</html>
