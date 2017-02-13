<?php
/**
 * Created by PhpStorm.
 * User: cals
 * Date: 17-2-13
 * Time: 上午11:20
 */
function duplicate_encode($word)
{
    $word = strtolower($word);
    for ($i = 0; $i < strlen($word); $i++) {
        $string[$i] = ')';
        if (substr_count($word, $word[$i]) === 1) {
            $string[$i] = '(';
        }
    }
    return implode('',$string);
}