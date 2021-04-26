<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\replyToPlayer;
use function Brain\Games\Cli\getUserName;

function runGame(string $rule, array $questions, array $correctAnswer)
{
    $playerName = getUserName();
    line($rule);
    for ($i = 0; $i < count($questions); $i++) {
        $plrAnswer = prompt("Question: {$questions[$i]}");
        line('Your answer: %s', $plrAnswer);
        if ($plrAnswer !== $correctAnswer[$i]) {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $plrAnswer, $correctAnswer[$i]);
            replyToPlayer($playerName, false);
            return;
        }
        line("Correct!");
    }
    replyToPlayer($playerName, true);
    return;
}
