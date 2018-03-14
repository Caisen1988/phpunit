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

        $this->assertEquals($ourservice->arr(), $ourservice->abs(233));

    }
}