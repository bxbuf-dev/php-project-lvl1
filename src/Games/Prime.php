<?php

namespace Brain\Games\Prime;

use function Brain\Games\Engine\runGame;

function gamePrime(): void
{
    $questions = [];
    $answers = [];

    for ($i = 0; $i < TOTAL_ROUNDS; $i++) {
        $questions[$i] = rand(1, 100);
        $answers[$i] = isPrime($questions[$i]) ? 'yes' : 'no';
    }
    runGame(PRIME_RULE, $questions, $answers);
    return;
}

function isPrime(int $num): bool
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
