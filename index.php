<?php

require_once "../web/Deposit.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="initial_amount">Initial amount</label><br><input id="initial_amount" name="initial_amount" placeholder="100 000" type="text"><br><br>
    <label for="months">Months</label><br><input id="months" name="months" placeholder="12" type="text"><br><br>
    <label for="amount_of_replenishment">Amount of replenishment</label><br><input id="amount_of_replenishment" name="amount_of_replenishment" placeholder="0" type="text"><br><br>
    <label for="percent">Percent</label><br><input id="percent" name="percent" placeholder="16" type="text"><br><br>
    <label for="percent_tax">Percent tax</label><br><input id="percent_tax" name="percent_tax" placeholder="19.5" value="19.5" type="text"><br><br>
    <input type="submit" name="Go" value="Go">
    <a href="http://oop/web/">Restart</a><br><br>
</form>
</body>
</html>

<?php
if (isset($_POST['Go'])){

    $initial_amount = $_POST['initial_amount'];
    $months = $_POST['months'];
    $amount_of_replenishment = $_POST['amount_of_replenishment'];
    $percent = $_POST['percent'];
    $percent_tax = $_POST['percent_tax'];

    $deposit1 = new \web\Deposit($initial_amount, $months, $amount_of_replenishment, $percent, $percent_tax);
    $deposit1->calc();
    //\web\Deposit::debug($_POST);
}

