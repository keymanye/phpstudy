<?php
$arr  = ['a', 'b', 'c', 'd'];
$arr1 = ['one' => 'demo1', 'two' => 'test2', 'three' => '3'];
//循环是值
foreach ($arr as $item) {
    echo $item, '<br />';
}
//循环键和值
foreach ($arr as $key => $value) {
    echo $key . '===>' . $value . '<br />';
}

foreach ($arr1 as $item => $v) {
    echo $item . ' ' . $v, '<br />';
}

