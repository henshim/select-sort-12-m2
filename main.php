<?php
function selectSort($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $tmp;
        }
    }
    return $arr;
}

$new = [1, 9, 4.5, 6.6, 5.7, -4.5];
echo 'before :';
echo implode(',', $new);
echo '<br> after: ';
echo implode(',' ,selectSort($new)).PHP_EOL;