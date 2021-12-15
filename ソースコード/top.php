<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>top-in</title>
</head>
<body>
<div style="text-align: center">
    <h1>Ishin</h1>
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
    <h4>今季新アイテム入荷しました！</h4>
    <h3>セール開催中</h3>
    <button onclick="location.href='セール.php'">詳しく見る▶︎</button>
    <h4>おすすめアイテム</h4>

    <table>
        <tr>
            <form action="top.php" method="post">
            <tb><input type="submit" name="women" value="WOMEN"></tb>
            <tb><input type="submit" name="men" value="MEN"></tb><br>
            </form>
        </tr>
    </table>
    <table style="display: inline-table">
    <?php
    $pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan;
                dbname=LAA1290595-school;charset=utf8',
        'LAA1290595',
        'Riemori4268');

    $sql = $pdo->prepare('select * from commodity where ID in(1,4)');
    $sql->execute([]);

    echo '<tr>';
    if(!isset($_POST['men'])) {
        foreach ($sql as $row) {
            $ID=$row['ID'];
            echo '<td>';
            echo '<a href="商品詳細.php?id=',$ID,'">';
            echo '<img src="./img/img', $ID, '.png">';
            echo '</a>';
            echo '<p>', $row['commodity_name'], '</p>';
            echo '<p>¥', number_format($row['money']), '</p>';
            echo '<p><input type="submit" name="favorite" value="お気に入りに追加"></p>';
            echo '</td>';
        }
    } else{
        $sql = $pdo->prepare('select * from commodity where ID in(2,3)');
        $sql->execute([]);
        foreach ($sql as $row) {
            echo '<td>';
            echo '<a href="商品詳細.php?id=',$row['ID'],'">';
            echo '<img src="./img/img',$row['ID'],'.png">';
            echo '</a>';
            echo '<p>',$row['commodity_name'],'</p>';
            echo '<p>¥', number_format($row['money']), '</p>';
            echo '</td>';
        }
    }
    echo '</tr>';
    ?>
    </table>
    </div>
</div>
</body>
</html>

