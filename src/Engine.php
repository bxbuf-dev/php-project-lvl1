<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Calc\gameCalc;
use function Brain\Games\Even\gameEven;
use function Brain\Games\Gcd\gameGcd;
use function Brain\Games\Prime\gamePrime;
use function Brain\Games\Progression\gameProgression;
use function Brain\Games\Cli\replyToPlayer;
use function Brain\Games\Cli\getUserName;

function playGame(string $gameName, int $gamesNumber)
{
    $playerName = getUserName();
    switch ($gameName) {
        case 'Calc':
            $game = gameCalc($gamesNumber);
            break;
        case 'Even':
            $game = gameEven($gamesNumber);
            break;
        case 'Gcd':
            $game = gameGcd($gamesNumber);
            break;
        case 'Prime':
            $game = gamePrime($gamesNumber);
            break;
        case 'Progression':
            $game = gameProgression($gamesNumber);
            break;
    }
    $rules = $game[0];
    $questions = $game[1];
    $answers = $game[2];

    $result = runGame($rules, $questions, $answers);

    replyToPlayer($playerName, $result);
}

function runGame(string $rule, array $questions, array $correctAnswer): bool
{
    line($rule);

    for ($i = 0; $i < count($questions); $i++) {
        $plrAnswer = prompt("Question: {$questions[$i]}");
        line('Your answer: %s', $plrAnswer);
        line('Correct answer: %s', $correctAnswer[$i]);
        if ($plrAnswer !== $correctAnswer[$i]) {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $plrAnswer, $correctAnswer[$i]);
            return false;
        }
        line("Correct!");
    }
    return true;
}
