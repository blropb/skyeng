<?php 
function bigint_sum(string $t1, string $t2)
{
    $at1 = str_split($t1);
    $at2 = str_split($t2);
    $result = [];
    $ten = 0;
    $iter = 0;
    $max = max(count($at1),count($at2));
    while ($iter < $max){
        $iter++;
        $val1 = array_pop($at1);
        $val2 = array_pop($at2);
        if ((is_null($val1) || is_numeric($val1)) && (is_null($val2) || is_numeric($val2))) {
            $sum = (int) $val1 + (int) $val2;
            $result[]=$sum%10+$ten;
            $ten = $sum > 9 ? 1 : 0;
        } else {
            exit("InvalidArgument");
        }
    }
    return implode("", array_reverse($result));
};
