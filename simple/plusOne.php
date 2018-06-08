<?php

// 加一
// 给定一个非负整数组成的非空数组，在该数的基础上加一，返回一个新的数组。

// 最高位数字存放在数组的首位， 数组中每个元素只存储一个数字。

// 你可以假设除了整数 0 之外，这个整数不会以零开头。

// 示例 1:

// 输入: [1,2,3]
// 输出: [1,2,4]
// 解释: 输入数组表示数字 123。
// 示例 2:

// 输入: [4,3,2,1]
// 输出: [4,3,2,2]
// 解释: 输入数组表示数字 4321。


function plusOne(array &$arr):int
{
     if(!is_array($arr)){
        throw new InvalidArgumentException("params errors");
    }

    return intval(implode('',$arr))+1;
}

$arr = [1,2,3];
$arr2 = [4,3,2,1];

var_export(plusOne($arr));
echo PHP_EOL;
var_export(plusOne($arr2));