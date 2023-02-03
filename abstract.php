<?php

abstract class 抽象クラス
{
    abstract public function 抽象メソッド();
    public function 普通メソッド()
    {
        echo "普通メソッド \n";
    }
}

class 子クラス extends 抽象クラス
{
    public function 抽象メソッド()
    {
        echo "子クラスで実装した抽象のメソッド \n";
    }
}

$obj = new 子クラス();
$obj->普通メソッド();
$obj->抽象メソッド();