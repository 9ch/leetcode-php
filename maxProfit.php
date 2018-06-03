<?php
/**
 * 买卖股票的最佳时机 II
 * 给定一个数组，它的第 i 个元素是一支给定股票第 i 天的价格。
 *设计一个算法来计算你所能获取的最大利润。你可以尽可能地完成更多的交易（多次买卖一支股票）。
 *注意：你不能同时参与多笔交易（你必须在再次购买前出售掉之前的股票）。
 */

 /**
  * 买卖股票的最佳时机
  *
  * @param array $arr
  * @return integer
  */
function maxProfit(array &$arr):int{
    if(!is_array($arr)){
        throw new InvalidArgumentException("param is not array",1);
    }
    $len = count($arr);    
    if($len <=1){
        throw new \Exception("params error", 1);
        
    }
    $total = 0;
    //将数组进行反转
    $arr = array_reverse($arr);
    //比较判断当前值和下一个值得大小,相减如果是整数则认为能够盈利
    for($i=0;$i<$len;$i++){
           if($i+1 == $len){
               break;
           }
            $temp = $arr[$i]-$arr[$i+1];
            if($temp > 0){
                $total = $total+$temp; 
        }
    }
    
    return $total;
}

$arr1 = [1,2,3,4,5];
$arr2 = [7,1,5,3,6,4];
$arr3 = [7,6,4,3,1];

echo maxProfit($arr1).PHP_EOL;
echo maxProfit($arr2).PHP_EOL;
echo maxProfit($arr3).PHP_EOL;

/**
 * output:
 * 4
 * 7
 * 0
 */