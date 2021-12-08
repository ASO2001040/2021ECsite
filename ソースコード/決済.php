<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>top-in</title>
</head>
<body>
<div style="text-align: center">
    <h1>Ishin</h1>
    <p>お支払い</p>
    <button onclick="location.href='top.php'">キャンセル</button><br>
    <?php
    echo '<p>商品数：</p>';
    echo '<p>配送料：500</p>';
    echo '<p>合計額：</p>';

    ?>

    <input type="radio" name="pay" value="カード決済">カード決済<br>
    <input type="radio" name="pay" value="コンビニ払い">コンビニ払い<br>
    <input type="radio" name="pay" value="Apple Pay">Apple Pay<br>
    <input type="radio" name="pay" value="代引き払い">代引き払い<br>

    <button onclick="location.href='注文完了.php'">以上の内容で注文</button>
</div>
</body>
</html>
