<?php
//php 5.4之前的版本定义方法

//数值数组：带有数字ID键的数组 下标 从0开始
$arr1 = [1.1, 'b2', 30, 'd4'];

//关联数组：带有指定的键的数组，每一个键关联一个值
$arr2 = ['index1' => "1", 'index2' => '2', 'index3' => '3'];

//多维数组：包含一个或多个的数组
$arr3 = [
    ['person1' => "zhangsan", 'address' => 'beijing'],
    ['person2' => "lisi", 'address' => 'shanghai'],
];

$arr4 = ["person1" => ['name' => "zhangsan", 'address' => 'beijing'],
         "person2" => ['name' => "lisi", 'address' => 'shanghai'],
];

echo $arr1[0], $arr1[3] ,'<br />';
echo $arr2['index1'],'<br />';
echo $arr2['index3'],'<br />';
//关联数组不能使用 数字下标访问 echo $arr2[2],'<br />';
var_dump($arr3[1]);
echo $arr3[1]['address'],'<br />';
echo $arr4['person1']['name'],'<br />';
var_dump($arr1);
asort($arr1); //升序
var_dump($arr1);
arsort($arr1);
var_dump($arr1);//降序
key($arr1);
var_dump($arr1);