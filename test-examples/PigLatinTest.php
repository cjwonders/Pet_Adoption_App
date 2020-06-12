<?php

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    /** @test */
    function convertSingleStartingConsonantWordToLatin () 
    {
        $word = 'test';
        $expectedResult = 'esttay';

        $pigLatin = new PigLatin();
        $result = $pigLatin->convert($word);

        $this->assertEquals(
            $expectedResult,
            $result,
            "Pig Latin conversion did not work correctly"
        );
    }

}