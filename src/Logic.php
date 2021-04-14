<?php

namespace Brain\Even\Logic;

use function cli\line;
use function cli\prompt;

function getAnswers()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $num = rand();
        $correctAnswer = ($num % 2) ? "no" : "yes";
        $plrAnswer = prompt("Question: {$num}");
        if ($plrAnswer !== $correctAnswer) {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $plrAnswer, $correctAnswer);
            return false;
        }
        line("Correct!");
    }
    return true;
}

function giveResult(string $name, bool $result)
{
    if ($result) {
        line("Congratulations, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
}
