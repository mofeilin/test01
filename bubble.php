<?php
/**
 * Created by PhpStorm.
 * User: lqh
 * Date: 2018/3/21
 * Time: 11:17
 */
function washCash($card_num){
    $cards = $tmp = array();
    for($i = 0; $i<$card_num; $i++){
        $tmp[$i] = $i;
    }

    for($i = 0; $i < $card_num; $i++){
        $index = rand(0, $card_num - $i -1);
        $cards[$i] = $tmp[$index];
        unset($tmp[$index]);
        $tmp = array_values($tmp);
    }
    return $cards;
}