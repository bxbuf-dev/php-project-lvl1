<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\runGame;

const TOTAL_ROUNDS = 3;
const EVEN_RULE = 'Answer "yes" if the number is even, otherwise answer "no".';

function playEven(): void
{
    $min = 0;
    $max = 99;
    $qAndA = [];

    for ($i = 0; $i < TOTAL_ROUNDS; $i++) {
        $qAndA[$i]['question'] = rand($min, $max);
        $qAndA[$i]['answer'] = isEven($qAndA[$i]['question']) ? "yes" : "no";
    }
    runGame(EVEN_RULE, $qAndA);
    return;
}

function isEven(int $num): bool
{
    return $num % 2 == 1 ? false : true;
}
