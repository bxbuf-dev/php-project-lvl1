<?php

namespace Brain\Games\Progression;

use function Brain\Games\Engine\runGame;

function gameProgression()
{
    $rules = 'What number is missing in the progression?';

    $questions = [];
    $answers = [];

    for ($i = 0; $i < 3; $i++) {
        $progression = progRand();
        $len = count($progression);
        $missedNum = rand(1, ($len - 2));
        $answers[$i] = strval($progression[$missedNum]);
        for ($j = 0; $j < $len; $j++) {
            if ($j === $missedNum) {
                $progression[$j] = '..';
            }
        }
        $questions[$i] = implode(' ', $progression);
    }
    runGame($rules, $questions, $answers);
    return;
}

function progRand(): array
{
    $progLen = 10; //rand(5, 9);
    $numStart = rand(1, 19);
    $numInc = rand(1, 9);
    $prog = [];
    for ($i = 0; $i < $progLen; $i++) {
        $prog[$i] = $numStart + $numInc * $i;
    }
    return $prog;
}
