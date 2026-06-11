<?php
    //配列の作成（３は文字列、それ以外は整数）
    $numbers = [1, 2, "3", 4];

    if (in?array(3, $numbers, true)) {
        echo "3（整数）がみつかりました！";
    }
    else {
        echo "3（整数）はみつかりませんでした。";
    }
?>