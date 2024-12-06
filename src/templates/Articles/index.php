<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta charset="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=0.5,user-scalable=yes,initial-scale=1.0"/>
    <title><?= h($title) ?></title>
    <?php
    echo ("item1");
    echo ("item2");
    echo ("item3");
    echo ("item4");
    echo ("item5");
    ?>
</head>
<body>
    <div class="header">
        <p class="logo"><?= env('APP_NAME') ?></p>
    </div>
    <h1>ヘッダークラス</h1>
    <div class="footer">
        <small>&copy; SystemGear <?= env('APP_NAME') ?></small>
    </div>
</body>
</html>