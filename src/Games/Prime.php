<?php

namespace Brain\Games\Prime;

use function Brain\Games\Engine\runGame;

function gamePrime()
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $questions = [];
    $answers = [];

    for ($i = 0; $i < 3; $i++) {
        $questions[$i] = rand(1, 100);
        if (isPrime($questions[$i])) {
            $answers[$i] = 'yes';
        } else {
            $answers[$i] = 'no';
        }
    }
    runGame($rules, $questions, $answers);
    return;
}

function isPrime(int $num): bool
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
