<?php
/**
 * Created by PhpStorm.
 * User: cals
 * Date: 17-2-10
 * Time: 下午5:50
 */

function solution($number)
{
    $result = 0;
    for ($i = 0; $i < $number; $i++) {
        if ($i % 3 === 0 or $i % 5 === 0) {
            $result = $result + $i;
        }
    }
    return $result;
}