<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\runGame;

function gameEven(): void
{
    $min = 0;
    $max = 99;
    $questions = [];
    $answers = [];
    for ($i = 0; $i < TOTAL_ROUNDS; $i++) {
        $questions[$i] = rand($min, $max);
        $answers[$i] = isEven($questions[$i]);
    }
    runGame(EVEN_RULE, $questions, $answers);
    return;
}

function isEven(int $num): string
{
    return $num % 2 == 1 ? 'no' : 'yes';
}
