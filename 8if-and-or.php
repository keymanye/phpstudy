<?php
$a = 10;
$b = 15;
$c = 20;

//if ($c > $b && $c > $a) {
//    echo '$c大于$a且大于$b';
//} else {
//    echo "不满足要求";
//}
//! 就是not
if (!($c > $b && $c > 100) || $c > 21) {
    echo '$c大于$a且大于$b';
} else {
    echo "不满足要求";
}
