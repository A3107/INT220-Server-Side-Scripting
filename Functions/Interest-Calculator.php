<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $amount = 2000;
    $time = 3;
    $interestRate = 5;

    function simpleInterest($amount, $time, $interestRate)
    {
        $result = ($amount * $time * $interestRate) / 100;
        echo "The amount is <strong> $amount </strong>" . "<br>";
        echo "The time in years is <strong> $time </strong>" . "<br>";
        echo "The interest rate is <strong> $interestRate </strong>" . "<br>";
        return $result;
    }

    $result = simpleInterest($amount, $time, $interestRate);
    echo "------------------------------------------" . '<br>';
    echo "The simple interest is <strong> $result </strong>" . '<br>';
    echo "------------------------------------------" . '<br>';
    ?>

</body>

</html>
<?php
