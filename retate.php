<?php

// 给定一个数组，将数组中的元素向右移动 k 个位置，其中 k 是非负数。

// 示例 1:

// 输入: [1,2,3,4,5,6,7] 和 k = 3
// 输出: [5,6,7,1,2,3,4]
// 解释:
// 向右旋转 1 步: [7,1,2,3,4,5,6]
// 向右旋转 2 步: [6,7,1,2,3,4,5]
// 向右旋转 3 步: [5,6,7,1,2,3,4]
// 示例 2:

// 输入: [-1,-100,3,99] 和 k = 2
// 输出: [3,99,-1,-100]
// 解释: 
// 向右旋转 1 步: [99,-1,-100,3]
// 向右旋转 2 步: [3,99,-1,-100]

/**
 * 旋转数组1
 *
 * @param array $array
 * @param [type] $num
 * @return array
 */
function rerate(array &$array,$num):array{
    if(!is_array($array)|| !is_numeric($num) || $num <1){
        throw new InvalidArgumentException("params error",1);
    }
    
    for($i=0;$i<$num;$i++){
       $temp = array_pop($array);
        array_unshift($array,$temp);
    }
    return $array;
}

/**
 * 旋转数组2
 *
 * @param array $array
 * @param [type] $num
 * @return array
 */
function rerate2(array &$array,$num):array{
    if(!is_array($array)|| !is_numeric($num) || $num <1){
        throw new InvalidArgumentException("params error",1);
    }
    $len = count($array);
    $tempNum = $len-$num;
    for($i=0;$i<$tempNum;$i++){
        $temp = array_shift($array);
        array_push($array,$temp);
    }
    return $array;
}

//TODO 第三种方法

$arr = [1,2,3,4,5,6,7];
$arr2 = [1,2,3,4,5,6,7];
var_export(rerate($arr,3));
var_export(rerate2($arr2,3));

//output
// array (
//   0 => 5,
//   1 => 6,
//   2 => 7,
//   3 => 1,
//   4 => 2,
//   5 => 3,
//   6 => 4,
// )array (
//   0 => 5,
//   1 => 6,
//   2 => 7,
//   3 => 1,
//   4 => 2,
//   5 => 3,
//   6 => 4,
// )