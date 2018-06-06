<?php

// 只出现一次的数字
// 给定一个非空整数数组，除了某个元素只出现一次以外，其余每个元素均出现两次。找出那个只出现了一次的元素。

// 说明：

// 你的算法应该具有线性时间复杂度。 你可以不使用额外空间来实现吗？

// 示例 1:

// 输入: [2,2,1]
// 输出: 1
// 示例 2:

// 输入: [4,1,2,1,2]
// 输出: 4


function singleNumber(array &$arr):int
{
    if(!is_array($arr) || count($arr)<3){
        throw new InvalidArgumentException("params errors");
    }
    $result=0;
    sort($arr);
    foreach ($arr as $key => $value) {
        if($key%2==0){
            $result = $result+$value;
        }else{
            $result = $result-$value;
        }
    }
    return abs($result);
}

$arr = [2,2,1];
$arr2 = [4,1,2,1,2];
$arr3 = [5,5,4,7,7,4,1];
var_export(singleNumber($arr)); //1
var_export(singleNumber($arr2)); //4
var_export(singleNumber($arr3)); //1

