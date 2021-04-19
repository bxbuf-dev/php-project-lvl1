<?php

//Логика игры Простое число
//Формулировка условия
//Критерии правильно/нерпавильно

namespace Brain\Games\Prime;

function gamePrime(int $maxQuestions)
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $questions = [];
    $answers = [];

    for ($i = 0; $i < $maxQuestions; $i++) {
        $questions[$i] = rand(1, 100);
        if (isPrime($questions[$i])) {
            $answers[$i] = 'yes';
        } else {
            $answers[$i] = 'no';
        }
    }
    $gameConditions = [$rules, $questions, $answers];
    return $gameConditions;
}

function isPrime($num): bool
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
