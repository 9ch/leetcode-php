<?php

//两个数组的交集--未完成
function intersect(array &$arr,array &$arr2):array{
    if(!is_array($arr) || !is_array($arr2)){
        throw new InvalidArgumentException("params errors");
    }

    $result = [];
    foreach ($arr as $key => $value) {
        foreach ($arr2 as $k => $v) {
            if($value == $v){
                $result[]=$v;
            }
        }
    }
    return array_unique($result);
}

$arr1 = [1, 2,2, 1];
$arr2 = [2,1];
var_export(intersect($arr2,$arr1));