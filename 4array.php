<?php
//php 5.4之前的版本定义方法
$arr1 = [1, 2, 3, 4, 5, 6];

//php 5.4之后的版本定义方法
$arr2 = ['a1', 'b2', 'c3', 'd4'];

//数值数组：带有数字ID键的数组 下标 从0开始
$arr3 = [1.1, 'b2', 30, 'd4'];

//关联数组：带有指定的键的数组，每一个键关联一个值
$arr4 = ['index1' => "1", 'index2' => '2', 'index3' => '3'];
//index3将会变成数值索引
$arr5 = ['i1' => "index1", 'i2' => 'index2', 'index3'];

//index3的下标为10，index4自动增长
$arr6 = ['i1' => "index1", 'i2' => 'index2', 10 => 'index3', 'index4'];

//多维数组：包含一个或多个的数组
$arr7 = [
    ['person1' => "zhangsan", 'address' => 'beijing'],
    ['person2' => "lisi", 'address' => 'shanghai'],
];

$arr8 = ["person1" => ['name' => "zhangsan", 'address' => 'beijing'],
         "person2" => ['name' => "lisi", 'address' => 'shanghai'],
];

echo $arr1; //输出类型  array
var_dump($arr1);
var_dump($arr2);
var_dump($arr3);
var_dump($arr4);
var_dump($arr5);
var_dump($arr6);
var_dump($arr7);
var_dump($arr8);