
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>検索</title>
    <link rel="stylesheet" href="./css/style/css">
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


    <h2>検索</h2>
    <hr>
    <form action="search-output.php" method="post">
        <input type="text" name="keyword">
        <button type="submit" value="検索" id="">検索</button><br>
    </form>


    <br>
        <h2>閲覧履歴</h2>
    <hr>
        <th><h3>商品名：検索時間</h3></th>

    <?php
    //DBから履歴として表示
    echo '<table>';

    //DB接続
    $pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan;
                    dbname=LAA1290595-school;charset=utf8',
        'LAA1290595',
        'Riemori4268');

    foreach ( $pdo -> query('select * from search_words') as $row) {

        echo '<p>';
        echo $row['words'],'：';
        echo $row['timestamp'];

        echo '<button type="submit" name="delete">','削除','</button>';
        echo '</p>';
        
    }

    $pdo = null;
    echo '</table>';



    ?>


</div>

</body>
</html>
