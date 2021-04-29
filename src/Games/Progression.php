<?php

namespace Brain\Games\Progression;

use function Brain\Games\Engine\runGame;

function gameProgression(): void
{
    $questions = [];
    $answers = [];

    for ($i = 0; $i < TOTAL_ROUNDS; $i++) {
        $progression = getRandProgression();
        $progLen = count($progression);
        $missedNum = rand(1, ($progLen - 2));
        $answers[$i] = strval($progression[$missedNum]);
        $progression[$missedNum] = '..';
        $questions[$i] = implode(' ', $progression);
    }
    runGame(PROG_RULE, $questions, $answers);
    return;
}

function getRandProgression(): array
{
    $progLen = 10;
    $numStart = rand(1, 19);
    $numInc = rand(1, 9);
    $prog = [];
    for ($i = 0; $i < $progLen; $i++) {
        $prog[$i] = $numStart + $numInc * $i;
    }
    return $prog;
}
