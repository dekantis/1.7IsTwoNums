<?php

//Задача: Выяснить, есть ли в записи натурального числа N две одинаковые цифры.

//Функция поиска одинковых цифр числа
function isNums(int $number): bool
{
    $numeric = $number % 10;
    $number = (int)($number/10);
    $numberCut = $number;//Целая часть от деления
    while ($number > 0) {
        if ($numeric == $number%10){
            return true;
        }
        $number = (int)($number / 10);
    }
    return $numberCut>10?isNums($numberCut):false;
}

$N = 11; //Натуральное число

if (isNums($N)) {
    echo "В заданном натуральном числе $N присутствуют одинаковые цифры";
};
