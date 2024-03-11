
<?php

function sumOfDigits($number) {
    $sum = 0;
    $numberString = (string) $number;
    for ($i = 0; $i < strlen($numberString); $i++) {
        $sum += intval($numberString[$i]);
    }
    return $sum;
}
$number = 1234;
$sum = sumOfDigits($number);
echo "Sum of digits of $number is: $sum";
?>
