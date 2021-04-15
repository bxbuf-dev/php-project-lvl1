<?php

//Логика игры Calc
//Формулировка условия
//Критерии правильно/нерпавильно

namespace Brain\Games\Calc;

function gameCalc(int $maxQuestions)
{
    $rules = 'What is the result of the expression?';

    $questions = [];
    $answers = [];

    for ($i = 0; $i < $maxQuestions; $i++) {
        $num1 = rand(0, 99);
        $num2 = rand(0, 9);
        $curExp = rand(1, 3);
        // matn action select
        switch ($curExp) {
            // addition
            case 1:
                $questions[$i] = "{$num1} + {$num2}";
                $answers[$i] = strval($num1 + $num2);
            // substraction
            case 2:
                $questions[$i] = "{$num1} - {$num2}";
                $answers[$i] = strval($num1 - $num2);
            // muliplication
            case 3:
                $questions[$i] = "{$num1} * {$num2}";
                $answers[$i] = strval($num1 * $num2);
        }
    }
    $gameConditions = [$rules, $questions, $answers];
    return $gameConditions;
}
