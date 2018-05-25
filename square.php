<?php


/**
 * 给出任意4个坐标，判断是否是矩形
 */

$q = [
    [1, 1],
    [1, 2],
    [2, 1],
    [2, 2],
];

function isRightAngle($a, $b, $c) {
    $array = [$a, $b, $c];
    sort($array, SORT_NUMERIC);
    if (($array[0] * $array[0] + $array[1] * $array[1]) == $array[2] * $array[2]) {
        return true;
    }
    return false;
}


var_dump(isRightAngle(4, 5, 3));

function twoPointLength(array $a, array $b) {
    return sqrt(pow(($a[0]-$b[0]), 2) + pow(($a[1]-$b[1]), 2));
}

function isSquare(array $a, array $b, array $c, array $d)
{
    // 边长
    $s1 = twoPointLength($a, $b);
    $s2 = twoPointLength($b, $c);
    $s3 = twoPointLength($c, $d);
    $s4 = twoPointLength($d, $a);

    // 斜线长
    $d1 = twoPointLength($a, $c);
    $d2 = twoPointLength($b, $d);


    // 任意边长


}


class square
{

    public function __construct()
    {

    }

    public function isSquare($a, $b, $c, $d)
    {
        // 4边+2对角线
        // 最长的2个为对角线
        // 其余4个为4条边
        $l1 = $this->twoPointLength($a, $b);
        $l2 = $this->twoPointLength($b, $c);
        $l3 = $this->twoPointLength($c, $d);
        $l4 = $this->twoPointLength($d, $a);
        $l5 = $this->twoPointLength($a, $c);
        $l6 = $this->twoPointLength($b, $d);

        // 判断3个直角就行了
        if ($this->isRightAngel($l1, $l2, $l4) && $this->isRightAngel($l2, $l3, $l6) && $this->isRightAngel($l3, $l4, $l5))
        {
            return true;
        }
        return false;

    }

    private function isRightAngel($a1, $a2, $a3)
    {
        $array = [$a1, $a2, $a3];
        sort($array, SORT_NUMERIC);
        if (($array[0] * $array[0] + $array[1] * $array[1]) == $array[2] * $array[2]) {
            return true;
        }
        return false;
    }

    private function twoPointLength(array $a, array $b)
    {
        return sqrt(pow(($a[0]-$b[0]), 2) + pow(($a[1]-$b[1]), 2));
    }

    private function isRightTriangle(array $a, array $b, array $c)
    {
        $ab1 = pow($a[0]-$b[0], 2);
        $ab2 = pow($a[1]-$b[1], 2);
        $abPow = $ab1 + $ab2;

        $ac1 = pow($a[0]-$c[0], 2);
        $ac2 = pow($a[1]-$c[1], 2);
        $acPow = $ac1 + $ac2;

        $bc1 = pow($b[0]-$c[0], 2);
        $bc2 = pow($b[1]-$c[1], 2);
        $bcPow = $bc1 + $bc2;

        $array = [$abPow, $acPow, $bcPow];

        sort($array, SORT_NUMERIC);

        if ($array[0] + $array[1] == $array[2]) {
            return true;
        }
        return false;
    }

    public function isRectangle(array $a, array $b, array $c, array $d)
    {
        if ($this->isRightTriangle($a, $b, $c)
            && $this->isRightTriangle($a, $b, $d)
            && $this->isRightTriangle($b, $c, $d))
        {
            return true;
        }
        return false;
    }

}

/**
 * 有精度损失，直接判断就可以了
 */
$b = new square();
var_dump($b->isRectangle([0, 10], [10, 0], [0, 0], [10, 10]));