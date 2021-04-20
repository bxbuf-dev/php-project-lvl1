<?php

//Логика игры Even
//Формулировка условия
//Критерии правильно/нерпавильно
namespace Brain\Games\Even;

function gameEven(int $maxQuestions): array
{
    $min = 0;
    $max = 99;
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    $questions = [];
    $answers = [];
    for ($i = 0; $i < $maxQuestions; $i++) {
        $questions[$i] = rand($min, $max);
        $answers[$i] = $questions[$i] % 2 == 1 ? 'no' : 'yes';
    }
    $gameConditions = [$rules, $questions, $answers];
    return $gameConditions;
}
