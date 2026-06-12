<?php
    //➀
    $fruits = ["りんご", "バナナ", "オレンジ"];
    foreach ($fruits as $fruit) {
        echo $fruit . "/n";
    }

    //➁
    $prices = ["りんご" => 100, "バナナ" => 50, "オレンジ" => 70];
    foreach ($prices as $fruit => $price) {
        echo "$fruitの値段は $price 円です。\n";
    }
?>