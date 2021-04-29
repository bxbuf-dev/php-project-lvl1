<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\runGame;

function gameEven(): void
{
    $min = 0;
    $max = 99;
    $qAndA = [];

    for ($i = 0; $i < TOTAL_ROUNDS; $i++) {
        $qAndA[$i]['question'] = rand($min, $max);
        $qAndA[$i]['answer'] = isEven($qAndA[$i]['question']);
    }
    runGame(EVEN_RULE, $qAndA);
    return;
}

function isEven(int $num): string
{
    return $num % 2 == 1 ? 'no' : 'yes';
}
