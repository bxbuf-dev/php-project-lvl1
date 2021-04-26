<?php

namespace Brain\Games\Gcd;

use function Brain\Games\Engine\runGame;

function gameGcd()
{
    $rules = 'Find the greatest common divisor of given numbers.';

    $questions = [];
    $answers = [];

    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(0, 99);
        $num2 = rand(0, 99);
        $questions[$i] = "{$num1} {$num2}";
        $answers[$i] = strval(gcd($num1, $num2));
    }
    runGame($rules, $questions, $answers);
    return;
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
