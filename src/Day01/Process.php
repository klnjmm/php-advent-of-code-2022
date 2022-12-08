<?php declare(strict_types=1);

namespace App\Day01;

final class Process
{
    public function max(string $content): int
    {
        $load = $this->calculateLoads($content);

        return max($load);
    }

    public function topThree(string $content): int
    {
        $load = $this->calculateLoads($content);

        rsort($load);

        return $load[0] + $load[1] + $load[2];
    }

    private function calculateLoads(string $content): array
    {
        $elvesLoad = explode(PHP_EOL . PHP_EOL, $content);

        return array_map(
            fn($elfLoad) => array_sum(explode(PHP_EOL, $elfLoad)),
            $elvesLoad
        );
    }
}
