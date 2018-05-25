<?php

/**
 * 有2个顺序数组长度分别是m n, 其中 m > n * n， 求2个数组的并集
 * 要求复杂度最小
 * 不能用php原生函数
 *
 * eg:
 *  -10, -8, 0, 1, 2, 4, 5, 6, 7, 8, 9
 *  2, 8, 10
 *
 *  并集是 2,8
 */

function f($m, $n)
{

}



// 顺序查询
// 时间复杂度O(n) 空间复杂度O(1)
function search(array $array, $value)
{
    $position = null;
    foreach ($array as $k => $v) {
        if ($v == $value) {
            $position = $k;
            break;
        }
    }
    return $position;
}

/**
 * 2分查找法
 * @param array $array
 * @param       $value
 * @return float
 */
function binary_search(array $array, $value)
{
    $height = count($array) - 1;
    $low = 0;
    while($low <= $height) {
        $middle = floor(($low + $height)/2);
        if ($array[$middle] == $value) {
            return $middle;
        } elseif ($array[$middle] < $value) {
            $low = $middle + 1;
        } elseif ($array[$middle] > $value) {
            $height = $middle - 1;
        }
    }
    return -1;
}


/**
 *
 * 二分递归查找法
 * @param array $array
 * @param       $value
 * @param       $low
 * @param       $height
 * @return float
 */
function binary_recursive_search(array $array, $value, $low = null, $height = null)
{
    if (empty($array)) {
        return -1;
    }

    if ($low == null) {
        $low = 0;
    }
    if ($height == null) {
        $height = count($array) - 1;
    }

    if ($low > $height || $low < 0) {
        return -1;
    }

    if ($height > count($array) -1 ) {
        return -1;
    }

    $middle = floor(($low + $height)/2);
    if ($array[$middle] == $value) {
        return $middle;
    } elseif ($array[$middle] < $value) {
        return binary_recursive_search($array, $value, $middle + 1, $height);
    } elseif ($array[$middle] > $value) {
        return binary_recursive_search($array, $value, 0, $middle - 1);
    }
}


$a = [1,2,4,5,6,7,8,11,24,33,43,545,3424];
$b = 33;
$p = binary_recursive_search($a, $b);
echo $p.PHP_EOL;
echo '==============='.PHP_EOL;
$d = binary_search($a, $b);
echo $d .PHP_EOL;

exit;

$a = 123;

function g1()
{
    global $a;
    global $b;
    $a = 1;
    return $a++;
}

function g2()
{
    global $a;
    global $c;
    $c = 1;
    return $a++;
}

echo $a.PHP_EOL;
echo g1().PHP_EOL;
echo $a.PHP_EOL;
echo g2().PHP_EOL;
