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
