<?php

$card = @ $_POST["number"];
$cvv2 = @$_POST["cvv2"];
$mah = @$_POST["mah"];
$sal = @$_POST["sal"];
$pass = @$_POST["pass"];

if (isset($_POST["pay"])) {
    if ($card == 6037991772772516 && $cvv2 == 925 && $mah == 01 && $sal == 04 && $pass == 862160) {
        header('location: 1.php');
    } else header('location: 2.php');
}