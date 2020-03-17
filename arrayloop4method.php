<?php
/*
1、使用for循环遍历数组
     conut($arr);用于统计数组元素的个数。
     for循环只能用于遍历，纯索引数组！！！！
     如果存在关联数组，count统计时会统计两种数组的总个数，使用for循环遍历混合数组，导致数组越界！！
*/
   $arr = array(1,2,3,5,6,7);
   $num = count($arr);        //count最好放到for外面，可以让函数只执行一次 count统计数组中元素的个数。
   echo "数组元素的个数{$num}<br/>"; //注意这里典型的双引号内用花括号包裹变量
   for($i=0;$i<$num;$i++){
       echo "{$i}==>{$arr[$i]}<br/>";  //注意php中双引号内使用花括号包裹变量的写法
   }
/*
2、forEach循环遍历数组
     foreach可以遍历任何类型的数组！！！
*/
$arr = array(1,2,3,"one"=>4,5,6,7);
foreach($arr as $value){
    echo "{$value}<br>";
}
foreach($arr as $key => $value){
    echo "{$key}==>{$value}<br>";
}
/*
  使用list()、each()、while()遍历数组
   (重点)list():用于将数组的每一个值，赋值给list函数的每一个参数。(list函数的参数，必须小于等于数组的元素个数);
   eg:list($a,$b,$c)=[1,2,3];-->$a=1; $b=2; $c=3;
   注意：① list()在解析数组时，只解析索引数组；
        ② list可以通过空参数，选择性的解析数组的值；
          list($a,,$b)=[1,2,3];-->$a=1;  $b=3;
   (重点)each():用于返回数组当前指针所在位的键值对！并将指针后移一位；
       返回值：如果指针有下一位，返回一个数组。包含一个索引数组(0-键，1-值)和一个关联数组("key"-键，"value"-值)；如果指针没有下一位，返回false；
   eg：
    ① each($arr) 返回数组或false；
    ② 把数组或false赋值给$a;
    ③ while判断$a如果是数组，继续执行下一次；
             如果$a是false，终止循环
  while($a = each($arr)){
  echo "{$a[0]}-->{$a[1]}<br>";
  echo "{$a['key']}-->{$a['value']}<br>";
  }
 */

/*
 使用list()/each()/while()配合遍历数组
 */
while(list($key,$value) = each($arr)){
    echo "{$key}-->{$value}<br>";
}
reset($arr);

/*
 *   4、 使用数组指针遍历数组
   ① next：将数组指针，后移一位。并返回后一位的值；没有返回false
   ② prev：将数组指针，前移一位。并返回前一位的值；没有返回false
   ③ end：  将数组指针，移至最后一位，返回最后一位的值；空数组返回false
   ④ reset:将数组指针，恢复到第一位。并返回第一位的值；空数组返回false
   ⑤ key: 返回当前指针所在位的键；
   ⑥ current:返回当前指针所在位的值；
 */

$arr = [1,2,3,4,"one"=>5];
while(true){
    echo key($arr);
    echo "--";
    echo current($arr);
    echo "<br>";
    if(!next($arr)){
        break;
    }
}
reset($arr);

//第二种方式：
do{
    echo key($arr);
    echo "--";
    echo current($arr);
    echo "<br>";
}while(next($arr));
reset($arr);



