<?php

namespace App\tests\Unit\Day03;

use PHPUnit\Framework\TestCase;

class ProcessTest extends TestCase
{
    public function testSumPrioritiesExample()
    {
        $content = file_get_contents(__DIR__."/example");
        $process = new \App\Day03\Process($content);
        self::assertEquals(157, $process->sumPriorities());
    }

    public function testSumPrioritiesPuzzleInput()
    {
        $content = file_get_contents(__DIR__."/puzzleInput");
        $process = new \App\Day03\Process($content);
        self::assertEquals(7793, $process->sumPriorities());
    }

    public function testSumPrioritiesByGroupExample()
    {
        $content = file_get_contents(__DIR__."/example");
        $process = new \App\Day03\Process($content);
        self::assertEquals(70, $process->sumPrioritiesByGroup());
    }

    public function testSumPrioritiesByGroupPuzzleInput()
    {
        $content = file_get_contents(__DIR__."/puzzleInput");
        $process = new \App\Day03\Process($content);
        self::assertEquals(2499, $process->sumPrioritiesByGroup());
    }
}