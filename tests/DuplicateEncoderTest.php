<?php

/**
 * Created by PhpStorm.
 * User: cals
 * Date: 17-2-13
 * Time: 上午11:21
 */
use PHPUnit\Framework\TestCase;

include __DIR__ . '/../src/Duplicate-Encoder/Duplicate-Encoder.php';

class DuplicateEncoderTest extends TestCase
{
    public function testBasics() {
        $this->assertEquals(duplicate_encode('din'), '(((');
        $this->assertEquals(duplicate_encode('recede'), '()()()');
        $this->assertEquals(duplicate_encode('Success'), ')())())', 'should ignore case');
        $this->assertEquals(duplicate_encode('iiiiii'), '))))))', 'duplicate-only-string');
        $this->assertEquals(duplicate_encode(' ( ( )'), ')))))(');
    }
}