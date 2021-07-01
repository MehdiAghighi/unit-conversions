<?php

namespace MehdiAghighi\UnitConversions\Tests;

use MehdiAghighi\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();
        $this->assertEquals(220.46, $lbs);
    }
}
