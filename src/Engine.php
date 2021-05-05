<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function runGame(string $rule, array $gameQandA): void
{
    line("Welcome to the Brain Games!");
    $playerName = prompt("May I have your name?");
    line("Hello, %s!", $playerName);
    line($rule);
    for ($i = 0; $i < count($gameQandA); $i++) {
        $plrAnswer = prompt("Question: {$gameQandA[$i]['question']}");
        line('Your answer: %s', $plrAnswer);
        if ($plrAnswer !== $gameQandA[$i]['answer']) {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $plrAnswer, $gameQandA[$i]['answer']);
            line("Let's try again, {$playerName}!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, {$playerName}!");
    return;
}
