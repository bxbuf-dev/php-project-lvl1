<?php

namespace Brain\Even\Logic;

use function cli\line;
use function cli\prompt;

function getAnswers()
{
    for ($i = 0; $i < 3; $i++) {
        $num = rand();
        $correctAnswer = ($num % 2) ? "no" : "yes";
        $plrAnswer = prompt("Question: {$num}");
        if ($plrAnswer !== $correctAnswer) {
            line("'{$plrAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
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
