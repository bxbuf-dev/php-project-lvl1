<?php

namespace Brain\Games\Progression;

use function Brain\Games\Engine\runGame;

const TOTAL_ROUNDS = 3;
const PROG_RULE = 'What number is missing in the progression?';

function playProgression(): void
{
    $qAndA = [];

    for ($i = 0; $i < TOTAL_ROUNDS; $i++) {
        $progression = getRandProgression();
        $progLen = count($progression);
        $missedNum = rand(1, ($progLen - 2));
        $qAndA[$i]['answer'] = strval($progression[$missedNum]);
        $progression[$missedNum] = '..';
        $qAndA[$i]['question'] = implode(' ', $progression);
    }
    runGame(PROG_RULE, $qAndA);
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
