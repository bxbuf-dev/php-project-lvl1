<?php

// Runs games engine. Input parameters are
//  $rule - string exlaining the rules of the game
// Examples:
// 'What is the result of the expression?'
// 'Answer "yes" if the number is even, otherwise answer "no".'
//
//  $question
//Examples:
//15 or 88 or 35
//99 * 9 or 12 + 15 or 58 - 34
//
//  $correctAnswer - correct answer
//Examples
//'yes' : 'no'
//891 : 27 : 24

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function runGame(string $rule, array $questions, array $correctAnswer): bool
{
    line($rule);

    for ($i = 0; $i < count($questions); $i++) {
        $plrAnswer = prompt("Question: {$questions[$i]}");
        line('Your answer: %s', $plrAnswer);
        if ($plrAnswer !== $correctAnswer[$i]) {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $plrAnswer, $correctAnswer[$i]);
            return false;
        }
        line("Correct!");
    }
    return true;
}
