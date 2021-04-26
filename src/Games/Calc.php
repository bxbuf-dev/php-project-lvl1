<?php

namespace Brain\Games\Calc;

function gameCalc(int $maxQuestions): array
{
    $rules = 'What is the result of the expression?';
    $expressions = ["*", "+", "-"];
    $expNum = count($expressions) - 1;
    $questions = [];
    $answers = [];

    for ($i = 0; $i < $maxQuestions; $i++) {
        $num1 = rand(1, 99);
        $num2 = rand(1, 9);
        $curExp = $expressions[rand(0, $expNum)];
        // matn action select
        switch ($curExp) {
            // addition
            case '+':
                $questions[$i] = "{$num1} + {$num2}";
                $answers[$i] = strval($num1 + $num2);
                break;
            // substraction
            case '-':
                $questions[$i] = "{$num1} - {$num2}";
                $answers[$i] = strval($num1 - $num2);
                break;
            // muliplication
            case '*':
                $questions[$i] = "{$num1} * {$num2}";
                $answers[$i] = strval($num1 * $num2);
                break;
        }
    }
    $gameConditions = [$rules, $questions, $answers];
    return $gameConditions;
}
