<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src;


class CalculateServiceTest extends TestCase
{
    public function testAbs()
    {
        echo "11";
        $ourservice = new Src\CalculateService();

        $this->assertEquals(4, $ourservice->abs(-4));

    }
}