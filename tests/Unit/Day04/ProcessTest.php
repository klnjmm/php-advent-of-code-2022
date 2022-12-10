<?php declare(strict_types=1);

namespace App\tests\Unit\Day04;

use PHPUnit\Framework\TestCase;

class ProcessTest extends TestCase
{
    public function testFullyOverlapExample()
    {
        $content = file_get_contents(__DIR__."/example");
        $process = new \App\Day04\Process($content);
        self::assertEquals(2, $process->fullyOverlap());
    }

    public function testFullyOverlapPuzzleInput()
    {
        $content = file_get_contents(__DIR__."/puzzleInput");
        $process = new \App\Day04\Process($content);
        self::assertEquals(515, $process->fullyOverlap());
    }

    public function testOverlapExample()
    {
        $content = file_get_contents(__DIR__."/example");
        $process = new \App\Day04\Process($content);
        self::assertEquals(4, $process->overlap());
    }

    public function testOverlapPuzzleInput()
    {
        $content = file_get_contents(__DIR__."/puzzleInput");
        $process = new \App\Day04\Process($content);
        self::assertEquals(883, $process->overlap());
    }
}