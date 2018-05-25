<?php
/**
 * Created by PhpStorm.
 * User: baobao
 * Date: 5/21/18
 * Time: 2:00 PM
 */


class demoClass
{


    /**
     * @router("/index/demo")
     * @param string $str
     * @return string
     */
    public function demo1(string $str) : string
    {
        return $str;
    }
}