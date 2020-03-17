<?php
echo 'hello' . '      ' . 'world' . '<br />';
echo "this is a php string" . '<br />';
echo 'this is a php string' . '<br />';

//php定义变量，需要使用$开始，调用 、定义都需要用$
$variable1 = 'keyman';
echo "zhang" . "san" . '<br />';
echo 'php variable test $variable1' . '<br />';
echo "php variable test $variable1" . '<br />';

//字符串处理方法  全局
/*
str_ireplace — str_replace 的忽略大小写版本
str_pad — 使用另一个字符串填充字符串为指定长度
str_repeat — 重复一个字符串
str_replace — 子字符串替换
str_rot13 — 对字符串执行 ROT13 转换
str_shuffle — 随机打乱一个字符串
str_split — 将字符串转换为数组
 */
echo str_rot13('abcd'), '<br />';
echo str_rot13('nopq'), '<br />';
echo rtrim(" abcdefg   "), '<br />';
echo ord('a'), chr(97);