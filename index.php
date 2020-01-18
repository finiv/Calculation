<?php

include 'Calculation.php';

$cal = new Calculation;

$cal->substractValue(20);
$cal->addValue(20);

if (is_number($cal->result)) { 
    $cal->add(42);
}

echo ($cal->result);
