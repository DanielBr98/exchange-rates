<?php
require 'Price.php';
extract($_POST);
$array = Price::cost($currency, $price);
echo "$array[0]|$array[1]|$array[2]|$array[3]|$array[4]|$array[5]|$array[6]";
