<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src;

class CalculateServiceTest extends TestCase
{
    public function testAbs()
    {

        $ourservice = new Src\CalculateService();

        $this->assertEquals(5, $ourservice->abs(-4));

    }
}