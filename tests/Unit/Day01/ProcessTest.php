<?php

namespace App\tests\Unit\Day01;

use PHPUnit\Framework\TestCase;

class ProcessTest extends TestCase
{
    // @Test
    public function testMaxExample()
    {
        $content = file_get_contents(__DIR__."/example");
        $process = new \App\Day01\Process();
        self::assertEquals(24000, $process->max($content));
    }

    // @Test
    public function testMaxPuzzleInput()
    {
        $content = file_get_contents(__DIR__."/puzzleInput");
        $process = new \App\Day01\Process();
        self::assertEquals(71023, $process->max($content));
    }

    // @Test
    public function testTopThreeExample()
    {
        $content = file_get_contents(__DIR__."/example");
        $process = new \App\Day01\Process();
        self::assertEquals(45000, $process->topThree($content));
    }

    // @Test
    public function testTopThreePuzzleInput()
    {
        $content = file_get_contents(__DIR__."/puzzleInput");
        $process = new \App\Day01\Process();
        self::assertEquals(206289, $process->topThree($content));
    }
}
