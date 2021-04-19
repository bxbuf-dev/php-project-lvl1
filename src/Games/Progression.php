<?php

//Логика игры НОД
//Формулировка условия
//Критерии правильно/нерпавильно

namespace Brain\Games\Progression;

function gameProgression(int $maxQuestions)
{
    $rules = 'What number is missing in the progression?';

    $questions = [];
    $answers = [];

    for ($i = 0; $i < $maxQuestions; $i++) {
        $progression = prog_rand();
        $len = count($progression);
        $missedNum = rand(0, ($len - 1));
        $answers[$i] = strval($progression[$missedNum]);
        for ($j = 0; $j < $len; $j++) {
            if ($j === $missedNum) {
                $progression[$j] = '...';
            }
        }
        $questions[$i] = implode(' ', $progression);
    }
    $gameConditions = [$rules, $questions, $answers];
    return $gameConditions;
}

function prog_rand()
{
    $progLen = rand(5, 10);
    $numStart = rand(0, 99);
    $numInc = rand(1, 9);
    $prog = [];
    for ($i = 0; $i < $progLen; $i++) {
        $prog[$i] = $numStart + $numInc * $i;
    }
    return $prog;
}