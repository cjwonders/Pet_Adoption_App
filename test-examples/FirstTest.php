<?php

class FirstTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    function firstAssertion()
    {
        $this->assertTrue(true);
    }
    function testSecondAssertion()
    {
        $this->assertTrue(false);
    }

}