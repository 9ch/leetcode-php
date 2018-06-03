<?php

// 给定一个整数数组，判断是否存在重复元素。

// 如果任何值在数组中出现至少两次，函数返回 true。如果数组中每个元素都不相同，则返回 false。

// 示例 1:

// 输入: [1,2,3,1]
// 输出: true
// 示例 2:

// 输入: [1,2,3,4]
// 输出: false
// 示例 3:

// 输入: [1,1,1,3,3,4,3,2,4,2]
// 输出: true

/**
 * 第一种实现方式
 * 先用函数去重,然后再进行判断.
 * @param array $array
 * @return boolean
 */
function containsDuplicate(array $array):bool{
    if(!is_array($array)||count($array)<=1){
        throw new \InvalidArgumentException("params errors",1);
    }
    $result = false;
    $newArr = array_unique($array);
    if(count($array)>count($newArr)){
        $result=true;
    }
    return $result;
}

/**
 * 第二种方式
 * 先排序,然后在进行判断.
 * @param array $array
 * @return boolean
 */
function containsDuplicate2(array $array):bool{
    if(!is_array($array)||count($array)<=1){
        throw new \InvalidArgumentException("params errors",1);
    }
    sort($array);
    $result = false;
    $len = count($array);
    for($i=0;$i<$len;$i++){
        if($i==$len-1){
            break;
        }
        if($array[$i]==$array[$i+1]){
            $result=ture;
            break;
        }
    }
    return $result;

}
$arr = [1,1,1,3,3,4,3,2,4,2];
$arr1 = [1,2,3,4];
 var_export(containsDuplicate($arr));
 var_export(containsDuplicate($arr1));
 var_export(containsDuplicate2($arr));
 var_export(containsDuplicate2($arr1));
 //output
 //true false true false