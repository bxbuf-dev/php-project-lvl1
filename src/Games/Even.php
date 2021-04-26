<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\runGame;

function gameEven(): void
{
    $min = 0;
    $max = 99;
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    $questions = [];
    $answers = [];
    for ($i = 0; $i < 3; $i++) {
        $questions[$i] = rand($min, $max);
        $answers[$i] = isEven($questions[$i]);
    }
    runGame($rules, $questions, $answers);
    return;
}

function isEven($num)
{
    return $num % 2 == 1 ? 'no' : 'yes';
}
