<?php

class FibonacciTest extends PHPUnit_Framework_TestCase {

    /**
     * @dataProvider generationDataProvider
     */
    public function testGeneration($input, $expected){
        $g = new \mheap\Fibonacci();
        $actual = $g->generate($input);
        $this->assertEquals($expected, $actual);
    }

    public function generationDataProvider(){
        $r = [];

        $r[] = [1, [0]];
        $r[] = [2, [0,1]];
        $r[] = [3, [0,1,1]];
        $r[] = [4, [0,1,1,2]];
        $r[] = [9, [0,1,1,2,3,5,8,13,21]];

        return $r;
    }
}
