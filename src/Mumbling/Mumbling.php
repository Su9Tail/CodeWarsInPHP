<?php
/**
 * Created by PhpStorm.
 * User: cals
 * Date: 17-2-13
 * Time: 下午1:19
 */
function accum($s)
{
    $array = str_split(strtolower($s));
    foreach ($array as $key => $item) {
        $string[$key] = ucfirst(str_repeat($item, $key + 1));
    }
    return implode('-', $string);
}