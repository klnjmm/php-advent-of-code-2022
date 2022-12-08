<?php declare(strict_types=1);

namespace App\Day02;

final class Process
{
    private const DRAW = 3;
    private const WIN = 6;
    private array $rounds;

    private const SCORE_BY_SHAPE = [
        'A' => 1,
        'B' => 2,
        'C' => 3,
    ];

    private const SHAPES = [
        'X' => 'A',
        'Y' => 'B',
        'Z' => 'C',
    ];

    public function __construct(string $content)
    {
        $this->rounds = explode(PHP_EOL, $content);
    }

    public function score(): int
    {
        $score = 0;

        foreach ($this->rounds as $round) {
            list($opponent, $me) = sscanf($round, '%c %c');

            $me = self::SHAPES[$me];
            $score += self::SCORE_BY_SHAPE[$me];

            if ($opponent === $me) {
                $score += self::DRAW;
                continue;
            }

            if (
                ($opponent === 'A' && $me === 'B') ||
                ($opponent === 'B' && $me === 'C') ||
                ($opponent === 'C' && $me === 'A')
            ) {
                $score += self::WIN;
            }
        }

        return $score;
    }

    public function rightScore(): int
    {
        $score = 0;

        foreach ($this->rounds as $round) {
            list($opponent, $result) = sscanf($round, '%c %c');

            if ($result === 'Y') {
                $score += 3 + self::SCORE_BY_SHAPE[$opponent];
                continue;
            }

            if ($result === 'Z') {
                $score += 6;
            }

            if (
                ($result === 'X' && $opponent === 'A') ||
                ($result === 'Z' && $opponent === 'B')
            ) {
                $score += self::SCORE_BY_SHAPE['C'];
                continue;
            }

            if (
                ($result === 'X' && $opponent === 'C') ||
                ($result === 'Z' && $opponent === 'A')
            ) {
                $score += self::SCORE_BY_SHAPE['B'];
                continue;
            }

            if (
                ($result === 'X' && $opponent === 'B') ||
                ($result === 'Z' && $opponent === 'C')
            ) {
                $score += self::SCORE_BY_SHAPE['A'];
            }
        }

        return $score;
    }
}
