<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPをHTML内に埋め込む</title>
</head>
<body>
    <h1>PHPをHTML内に埋め込む例</h1>
    <p>現在の日時は:</p>
    <p>
       <?php
            //現在の日時を取得して画面に表示する命令です
            echo date('Y年m月d日 H:i:s');
        ?>
    </p>
</body>
</html>