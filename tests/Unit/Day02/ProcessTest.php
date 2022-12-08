<?php

namespace App\tests\Unit\Day02;

use PHPUnit\Framework\TestCase;

class ProcessTest extends TestCase
{
    public function testScoreExample()
    {
        $content = file_get_contents(__DIR__."/example");
        $process = new \App\Day02\Process($content);
        self::assertEquals(15, $process->score());
    }

    public function testScorePuzzleInput()
    {
        $content = file_get_contents(__DIR__."/puzzleInput");
        $process = new \App\Day02\Process($content);
        self::assertEquals(15572, $process->score());
    }

    public function testRightScoreExample()
    {
        $content = file_get_contents(__DIR__."/example");
        $process = new \App\Day02\Process($content);
        self::assertEquals(12, $process->rightScore());
    }

    public function testRightScorePuzzleInput()
    {
        $content = file_get_contents(__DIR__."/puzzleInput");
        $process = new \App\Day02\Process($content);
        self::assertEquals(16098, $process->rightScore());
    }
}