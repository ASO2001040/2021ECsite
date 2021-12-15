<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div style="text-align: center">
    <h1>Ishin</h1>
    <button onclick="location.href='top.php'">TOP</button>
    <button onclick="location.href='検索.php'">検索</button>
    <button onclick="location.href='セール.php'">セール</button>
    <button onclick="location.href='カート.php'">カート</button>
    <button onclick="location.href='人気.php'">人気商品</button>
    <button onclick="location.href='会員情報.php'">会員情報</button>
    <div>
        <br>
        <?php
        $pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan;
                dbname=LAA1290595-school;charset=utf8',
            'LAA1290595',
            'Riemori4268');

        $sql = $pdo->prepare('select * from commodity where ID =?');
        $sql->execute([$_REQUEST['id']]);
        foreach($sql as $row){
            echo '<form action="カート.php" method="post">';
            echo '<img src="./img/img', $row['ID'], '.png">';
            echo '<p>', $row['commodity_name'], '</p>';
            echo '<p>この季節にぴったりな素材です</p>';
            echo '<p>(商品説明)</p>';
            echo '<select name="size>';
            echo '<option value="">サイズを選択してください</option>';
            echo '<option value="S">S</option>';
            echo '<option value="M">M</option>';
            echo '<option value="L">L</option>';
            echo '</select>';
            echo '<br>';
            echo '<select name="count">';
            echo '<option>個数を選択してください</option>';
            for($i=1; $i<=10;$i++){
                echo '<option value="',$i,'">',$i,'</option>';
            }
            echo '</select>';
            echo '<p>¥', number_format($row['money']), '</p>';
            echo '<input type="hidden" name="id" value="',$row['ID'],'">';
            echo '<input type="hidden" name="name" value="',$row['commodity_name'],'">';
            echo '<input type="hidden" name="price" value="',$row['money'],'">';
            echo '<p><input type="submit" name="cart" value="カートに入れる"></p>';
            echo '</form>';
            echo '<p><input type="submit" name="favorite" value="お気に入りに追加"></p>';
        }
        ?>
        <a href="top.php">閉じる</a>
        </div>
</body>
</html>

