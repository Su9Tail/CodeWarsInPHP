<?php

/**
 * Created by PhpStorm.
 * User: Cals
 * Date: 2017/2/10
 * Time: 19:20
 */

use PHPUnit\Framework\TestCase;

include __DIR__ . '/../src/Multiples-of-3-and-5/Multiples-of-3-and-5.php';

class MultiplesOf3And5Test extends TestCase
{
    public function testBasics() {
        $this->assertEquals(23, solution(10));
    }
}
