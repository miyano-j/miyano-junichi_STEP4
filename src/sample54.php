<?php
    //ユーザー的擬関数を定義「２つの引数アリ」
    function name($cytech, $engineer) {
        $result = $cytech + $ecgineer;
        return $result;
    }

    //関数を呼び出して結果を表示する
    //$cytechに２、$engineerに３が代入され、計算結果の５が返される
    echo name(2, 3);
?>