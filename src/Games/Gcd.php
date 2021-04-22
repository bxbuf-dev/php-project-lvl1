<?php

namespace Brain\Games\Gcd;

function gameGcd(int $maxQuestions): array
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

function gcd(int $num1, int $num2): int
{
    while ($num2 != 0) {
        $tmp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $tmp;
    }
    return $num1;
}
