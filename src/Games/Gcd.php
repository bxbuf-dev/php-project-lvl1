<?php

namespace Brain\Games\Gcd;

use function Brain\Games\Engine\runGame;

function gameGcd(): void
{
    $qAndA = [];

    for ($i = 0; $i < TOTAL_ROUNDS; $i++) {
        $num1 = rand(0, 99);
        $num2 = rand(0, 99);
        $qAndA[$i]['question'] = "{$num1} {$num2}";
        $qAndA[$i]['answer'] = strval(getGcd($num1, $num2));
    }
    runGame(GCD_RULE, $qAndA);
    return;
}

function getGcd(int $num1, int $num2): int
{
    while ($num2 != 0) {
        $tmp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $tmp;
    }
    return $num1;
}
