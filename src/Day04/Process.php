<?php declare(strict_types=1);

namespace App\Day04;

class Process
{
    private array $assignements;

    public function __construct($content)
    {
        $this->assignements = explode(PHP_EOL, $content);
    }

    public function fullyOverlap(): int
    {
        $numberOfOverlap = 0;
        foreach ($this->assignements as $assignement) {
            list($elf1Begin, $elf1End, $elf2Begin, $elf2End) = sscanf($assignement, '%d-%d,%d-%d');

            $elf1 = range($elf1Begin, $elf1End);
            $elf2 = range($elf2Begin, $elf2End);

            $numberOfElementElf1 = count($elf1);
            $numberOfElementElf2 = count($elf2);

            $numberOfElementOverlap =  count(array_intersect($elf1, $elf2));

            if ($numberOfElementOverlap === $numberOfElementElf1 || $numberOfElementOverlap === $numberOfElementElf2) {
                $numberOfOverlap++;
            }
        }

        return $numberOfOverlap;
    }

    public function overlap(): int
    {
        $numberOfOverlap = 0;
        foreach ($this->assignements as $assignement) {
            list($elf1Begin, $elf1End, $elf2Begin, $elf2End) = sscanf($assignement, '%d-%d,%d-%d');

            $elf1 = range($elf1Begin, $elf1End);
            $elf2 = range($elf2Begin, $elf2End);

            if (array_intersect($elf1, $elf2) !== []){
                $numberOfOverlap++;
            }
        }

        return $numberOfOverlap;
    }
}