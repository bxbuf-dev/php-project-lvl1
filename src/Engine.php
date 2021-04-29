<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\getUserName;

define('TOTAL_ROUNDS', 3);
define('CALC_RULE', 'What is the result of the expression?');
define('EVEN_RULE', 'Answer "yes" if the number is even, otherwise answer "no".');
define('GCD_RULE', 'Find the greatest common divisor of given numbers.');
define('PRIME_RULE', 'Answer "yes" if given number is prime. Otherwise answer "no".');
define('PROG_RULE', 'What number is missing in the progression?');

function runGame(string $rule, array $gameQandA): void
{
    $playerName = getUserName();
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
