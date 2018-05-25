<?php
/**
 * Created by PhpStorm.
 * User: baobao
 * Date: 5/21/18
 * Time: 1:51 PM
 */

include_once "annotationInterface.php";

class annotationBase implements annotationInterface
{

    public function parseClassFile($classPath)
    {
        if (!is_file($classPath)) {
            throw new \Exception("Class $classPath is not existed");
        }

        list($cl, $suffix) = explode('.', $classPath);
        $reflection = new ReflectionClass($cl);
        $document = $reflection->getDocComment();
        $mt = $reflection->getMethod('demo1');

        var_dump($document);
        var_dump($mt);
    }
}