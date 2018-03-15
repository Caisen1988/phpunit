<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Fibonacci;

class FibonaciiTest extends TestCase
{

    public function testResult()
    {

        $fibonacci = new Fibonacci();

        $this->assertEquals(13, $fibonacci->result(7));

    }

}