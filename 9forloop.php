<?php
$sum = 0;
/*
for (初始值; 条件; 增量)
{
    要执行的代码;
}
*/
for ($i = 0; $i <= 100; $i++) {
    $sum += $i;
}
echo $sum.'<br /> ';
//var_dump(range(1,16));

$sum1 = 0 ;
foreach (range(1,100) as $value) {
    $sum1 +=$value;
}
echo $sum1;
