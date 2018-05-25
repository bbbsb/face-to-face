<?php

/**
 * 1. 使用冒泡升序排序
 * 2. 36进制算法
 * 3. 多台web服务器怎么收集日志和分析日志
 * 4. 查询指定文件夹下所有php文件里面包含friends的数量
 *     grep -o "friends" /dir/class/*.php | wc -l
 */

/**
 * 冒泡排序
 * 时间复杂度O(n^2) 空间复杂度O(1)
 * @param $array
 * @return mixed
 */
function bubble_sort($array)
{
    $cnt = count($array);

    for ($i = 0; $i < $cnt; $i++) {
        for ($j = $i + 1; $j < $cnt; $j++) {
            if ($array[$i] > $array[$j]) {
                $tmp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $tmp;
            }
        }
    }
    return $array;
}

/**
 * 10进制转36进制
 * @param $int
 * @return mixed|string
 */
function dec_to_36($int)
{
    static $array = [
        '0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4,
        '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9,
        '10' => 'a', '11' => 'b', '12' => 'c', '13' => 'd', '14' => 'e', '15' => 'f'
    ];

    $i = $int / 16;
    $j = $int % 16;
    if ($i > 16) {
        return dec_to_36($int/16).$array[$j];
    } else {
        if ($i == 0) {
            return $array[$j];
        }
        return $array[$i].$array[$j];
    }
}

//var_dump(bubble_sort([1, 3,4,2,6,3,85,65,35,33]));
$num = 10900;
var_dump(dec_to_36($num));
var_dump(dechex($num));
