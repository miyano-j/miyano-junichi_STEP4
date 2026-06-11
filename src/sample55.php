<?php
    //変数
    $factor = 10;

    //匿名関数の定義
    $multiplier = function($number) use ($factor) {
        return $number * $factor;
    };

    //匿名関数の呼び出し
    echo $multiplier(5);
    //$factorに１０を代入
    //$multiplierに匿名関数を代入し、use($factor)という構文を使って外部変数$factorを関数内で使用することを宣言
    //定義した匿名関数$multiplierを引数５と共に呼び出す
    //匿名関数内では、引数$numberと外部変数$factorを使って、引数と外部変数の積を計算
    //echo文で計算結果５０を表示
?>