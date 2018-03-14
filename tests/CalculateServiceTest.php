<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src;

class CalculateServiceTest extends TestCase
{
    public function testAbs()
    {
        echo 11222;
        $ourservice = new Src\CalculateService();

        $this->assertEquals(88, $ourservice->abs(-4));

    }
}