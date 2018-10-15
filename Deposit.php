<?php

namespace web;


class Deposit
{
    private $initial_amount, $months, $amount_of_replenishment, $percent, $percent_tax, $sum;

    public function __construct($initial_amount, $months, $amount_of_replenishment, $percent = 16, $percent_tax = 19.5)
    {
        $this->initial_amount = $initial_amount; // начальная сумма
        $this->months = $months; // месяци
        $this->amount_of_replenishment = $amount_of_replenishment; // пополнение в месяц
        $this->percent = $percent; // проценты в год
        $this->percent_tax = $percent_tax;
    }

    public function calc()
    {
        echo "Sum = " . $this->sum = $this->initial_amount . "<br>";
        echo "Percent = " . $this->percent . "%<br>";
        echo "Percent in month = " . $percent_in_month = $this->percent/12 . "<br>";
        echo "Months = " . $this->months . "<br>";
        echo "Amount of replenishment = " . $this->amount_of_replenishment . "<br>" ;
        echo "Percent tax = " . $this->percent_tax . "%<br>" ;
        echo "<hr>";

        for ($i = 1; $i <= $this->months; $i++){
            echo "№ month = " . $i . "<br>";
            echo " Sum in month = " . $sum_in_month = $percent_in_month * $this->sum / 100 . "<br>";
            echo "Sum = " . $this->sum += $sum_in_month + $this->amount_of_replenishment . "<br>";
            echo "<hr>";
        }

        $profit = round($this->sum - ($this->amount_of_replenishment*$this->months) - $this->initial_amount, 2);
        echo "Net profit = " . $profit . "<br>";
        echo "Tax = " . $tax = $profit*$this->percent_tax/100 . "<br>";
        echo "Net profit for tax = " . ($profit-$tax) . "<br>";
        $sum = $this->sum-$tax;
        echo "Sum - " . round($sum, 2) . "<hr><hr>";
    }

    public static function debug($obj)
    {
        echo "<pre>";
        print_r($obj);
        echo "</pre>";
    }

}