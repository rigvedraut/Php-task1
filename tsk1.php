<?php

function isEvenOrOdd($number) {
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number"])) {
    $number = $_POST["number"];
    $result = isEvenOrOdd($number);
    echo "$number is $result";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd</title>
</head>
<body>
    <h2>Check if Number is Even or Odd</h2>
    <form method="POST">
        <label for="number">Enter a number:</label><br>
        <input type="text" id="number" name="number" required><br><br>
        <input type="submit" value="Check">
    </form>
</body>
</html>
