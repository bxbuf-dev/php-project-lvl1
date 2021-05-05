<?php

namespace Brain\Games\Prime;

use function Brain\Games\Engine\runGame;

const TOTAL_ROUNDS = 3;
const PRIME_RULE = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function playPrime(): void
{
    $qAndA = [];

    for ($i = 0; $i < TOTAL_ROUNDS; $i++) {
        $qAndA[$i]['question'] = rand(1, 100);
        $qAndA[$i]['answer'] = isPrime($qAndA[$i]['question']) ? 'yes' : 'no';
    }
    runGame(PRIME_RULE, $qAndA);
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
