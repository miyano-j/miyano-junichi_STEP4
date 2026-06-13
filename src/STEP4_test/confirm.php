<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>入力内容確認</h1>
    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST["username"] ?? '';
            $age = $_POST["age"] ?? '';
            $telephonenumber = $_POST["telephonenumber"] ?? '';
            $emailaddress = $_POST["emailaddress"] ?? '';
            $address = $_POST["address"] ?? '';
            $question = $_POST["question"] ?? '';
            $gender = $_POST["gender"] ?? '';


            //バリデーション
            if ($username === "" || $age === "" || $telephonenumber === "" || $emailaddress === "" || $address === "" || $question === "" || $gender === "") {
                echo "<p>未入力の項目があります。</p>";
            }
            elseif (!preg_match("/^[ぁ-んァ-ヶー-龠a-zA-Z]+$/u", $username)) {
                echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
            }
            elseif (!is_numeric($age) || $age < 0 || $age > 150) {
                echo "<p>年齢は0～150で入力してください。</p>";
            }
            elseif (!preg_match("/^[0-9\-]+$/", $telephonenumber)) {
                echo "<p>電話番号は半角数字とハイフンのみ使用できます。</p>";
            }
            elseif (!filter_var($emailaddress, FILTER_VALIDATE_EMAIL)) {
                echo "<p>メールアドレスの形式が正しくありません。</p>";
            }
            elseif (!preg_match("/^[ぁ-んァ-ヶー-龠a-zA-Z0-9\-]+$/u", $address)) {
                echo "<p>住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。</p>";
            }
            else {
                //入力内容の表示
                echo "<p>利用者名:" .htmlspecialchars($username, ENT_QUOTES, 'UTF-8') . "</p>";
                echo "<p>年齢:" .htmlspecialchars($age, ENT_QUOTES, 'UTF-8') . "</p>";
                echo "<p>電話番号:" . htmlspecialchars($telephonenumber, ENT_QUOTES, 'UTF-8') . "</p>";
                echo "<p>メールアドレス:" . htmlspecialchars($emailaddress, ENT_QUOTES, 'UTF-8') . "</p>";
                echo "<p>住所:" . htmlspecialchars($address, ENT_QUOTES, 'UTF-8') . "</p>";
                echo "<p>質問:" .nl2br(htmlspecialchars($question, ENT_QUOTES, 'UTF-8')) . "</p>";
                echo "<p>性別:" . htmlspecialchars($gender, ENT_QUOTES, 'UTF-8') . "</p>";
            }
        }
        else {
            echo "<p>データが送信されていません。</p>";
        }
    ?>
</body>
</html>