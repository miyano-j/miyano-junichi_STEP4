<?php
    //配列
    $array1 = array("あ", "い", "う");
    $array2 = array("え", "お", "か");

    //array_marge関数を使用して結合
    $merged_array = array_marge($array1, $array2);

    //出力
    print_r($merged_array);
?>