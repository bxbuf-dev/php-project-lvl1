<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function getUserName(): string
{
    line("Welcome to the Brain Games!");
    $plrName = prompt("May I have your name?");
    line("Hello, %s!", $plrName);

    return $plrName;
}

function replyToPlayer(string $name, bool $result): void
{
    if ($result) {
        line("Congratulations, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
    return;
}

function menuGame(): int
{
    line("We have games:");
    line("1. Even / Odd");
    line("2. Calculator");
    line("3. Greatest common defractor");
    line("4. Progression");
    line("5. Prime number");
    $gameNum = prompt("Choose the game");

    return $gameNum;
}
