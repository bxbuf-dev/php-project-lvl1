<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function getUserName()
{
    line("Welcome to the Brain Games!");
    $plrName = prompt("May I have your name?");
    line("Hello %s!", $plrName);

    return $plrName;
}

function replyToPlayer($name, $result)
{
    if ($result) {
        line("Congratulations, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
    return;
}

function menuGame()
{
    line("We have games:");
    line("1. Even / Odd");
    line("2. Calculator");
    line("3. Greatest common defractor");
    line("4. Progression");
    $gameNum = prompt("Choose the game");

    return strval($gameNum);
}
