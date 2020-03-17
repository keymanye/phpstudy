<?php
foreach (range(1, 100) as $item) {
    if ($item % 3 == 0 && $item % 7 == 0) {
        echo $item . '<br />';
    }
}

echo str_repeat('-', 40) . '<br />';
foreach (range(100, 1) as $item) {
    if ($item % 3 == 0 && $item % 7 == 0) {
        echo $item . '<br />';
        break; //中断整个循环
    }
}

echo str_repeat('-', 40) . '<br />';
foreach (range(100, 1) as $item) {
    if ($item % 3 == 0 && $item % 7 == 0) {
        echo "本次循环被终止， 值为$item<br />";
        continue; //中断档次循环
        //echo $item . '<br />';
    }
}
