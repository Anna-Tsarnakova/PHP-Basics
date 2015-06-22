<?php
function sumTwoNumbers($firstNumber, $secondNumber){
    $sum = number_format($firstNumber + $secondNumber, 2, '.', '');
    echo '$firstNumber + $secondNumber = ' . $firstNumber. ' + ' . $secondNumber. ' = ' . $sum;
    echo "<br />\n";
}

sumTwoNumbers(2, 5);
sumTwoNumbers(1.567808, 0.356);
sumTwoNumbers(1234.5678, 333);
?>