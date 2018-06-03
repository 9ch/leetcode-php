<?php

/**
 * 从排序数组中删除重复项
 *给定一个排序数组，你需要在原地删除重复出现的元素，使得每个元素只出现一次，返回移除后数组的新长度。
 * 不要使用额外的数组空间，你必须在原地修改输入数组并在使用 O(1) 额外空间的条件下完成。
 * 
 * @param array $num
 * @return void
 */
function removeDuplicate(array &$num):int{
    if(!is_array($num)){
        throw new InvalidArgumentException("error params", 1);
    }
    $len = count($num);
    if(count($num)<=1){
        return count($num);
    }
    for ($i=0; $i < $len; $i++) {
        if($i!=$len-1){
            if($num[$i]==$num[$i+1]){
                unset($num[$i]);
            }
        }
        
    }
    return count($num);
}


$arr=[1,1,2,2,5,7,8,8,9];
echo removeDuplicate($arr);
var_export($arr);
