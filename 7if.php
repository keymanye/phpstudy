<?php
// true  false
//条件   == >= <= > <  !=
//逻辑操作   && and  , ||  or ,  ! 取反
/*
$str = "php string";

if ($str == 'php string') {
    echo "ok";
} else {
    echo "error";
}
*/

//===及判断值也判断类型
$number = 11;
if ($number === '10') {
    echo "number等于10";
} else if ($number == '11') {
    echo 'number 等于11';
} else {
    echo "number 不等于10";
}