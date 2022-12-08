<?php

namespace App\Day03;

final class Process
{
    private array $rucksacks;
    private array $priorities;

    public function __construct(string $content)
    {
        $this->rucksacks = explode(PHP_EOL, $content);

        $lowercasePriorities = array_combine(range('a', 'z'), range(1, 26));
        $uppercasePriorities = array_combine(range('A', 'Z'), range(27, 52));
        $this->priorities = array_merge($lowercasePriorities, $uppercasePriorities);
    }

    public function sumPriorities(): int
    {
        $sumPriorities = 0;
        foreach ($this->rucksacks as $rucksack) {
            $rucksackAsArray = str_split($rucksack);
            $compartimentsLength = \count($rucksackAsArray) / 2;

            $compartiments = array_chunk($rucksackAsArray, $compartimentsLength);
            $items = array_intersect(...$compartiments);
            $item = array_shift($items);

            $sumPriorities += $this->priorities[$item];
        }

        return $sumPriorities;
    }

    public function sumPrioritiesByGroup(): int
    {
        $groups = array_chunk($this->rucksacks, 3);

        $sumPriorities = 0;
        foreach ($groups as $group) {
            $groupAsArray = array_map(fn($elf) => str_split($elf), $group);

            $items = array_intersect(...$groupAsArray);
            $item = array_shift($items);

            $sumPriorities += $this->priorities[$item];
        }

        return $sumPriorities;
    }
}
