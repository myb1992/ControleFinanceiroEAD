<?php

function Calcular1($num1, $num2, $num3)
{
    if ($num1 == '' || $num2 == '' || $num3 == '') {

        return false;
    } 

        $res1 = $num1 + $num2 + $num3;
        return $res1;
    
}
function Calcular2($num4, $num5, $num6, $res1)
{
    if ($num4  == '' || $num5 == '' || $num6 == '' || $res1 =='') {

        return false;
    }

    $res2 = ($num4 * $num5 * $num6) / $res1;
    return $res2;
}
function Calcular3($num7, $num8, $num9, $num10, $res1, $res2)
{
    if ($num7 == '' || $num8 == '' || $num9 == '' || $num10 == '' || $res2 == '') {
        return false;
    }
    $res3 = ($num7 + $num8 + $num9 + $num10) / ($res1 + $res2);
    return $res3;
}
