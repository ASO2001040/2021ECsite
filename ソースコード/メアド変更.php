<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>top-in</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div style="text-align: center">
    <h1>Ishin</h1>
    <h2>メールアドレスの変更</h2>
    <p>現在のメールアドレス</p>
    <?php
    $pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan;
                dbname=LAA1290595-school;charset=utf8',
        'LAA1290595',
        'Riemori4268');

    foreach ($pdo->query('SELECT * FROM member') as $row){
        echo'<p>';
        echo $row['mail'], ':';
        echo'</p>';
    }
    $pdo = null;
    ?>
    <p>新しく登録するメールアドレスを入力してください</p>
    <form action="メアド変更完了.php" method="post">
        <input type="text" name="mail"><br>
        <button type="submit" name="action" value="send">変更する</button>

        <br>
    </form>

    <div>
</body>
</html>
