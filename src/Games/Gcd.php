<?php

//Логика игры НОД
//Формулировка условия
//Критерии правильно/нерпавильно

namespace Brain\Games\Gcd;

function gameGcd(int $maxQuestions)
{
    $rules = 'Find the greatest common divisor of given numbers.';

    $questions = [];
    $answers = [];

    for ($i = 0; $i < $maxQuestions; $i++) {
        $num1 = rand(0, 99);
        $num2 = rand(0, 99);
        $questions[$i] = "{$num1} {$num2}";
        $answers[$i] = strval(gcd($num1, $num2));
    }
    $gameConditions = [$rules, $questions, $answers];
    return $gameConditions;
}

function gcd($num1, $num2)
{
    if ($num2 > $num1) {
        $tmp = $num2;
        $num2 = $num1;
        $num1 = $tmp;
    }
    while ($num2 != 0) {
        $tmp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $tmp;
    }
    return $num1;
}
