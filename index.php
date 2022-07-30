<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <style>
        body{
            background-color: #6c49bd;
        }
        .table {
            background-color: wheat;
            border: 1px solid ;
            margin-left: auto;
            margin-right: auto;
            margin-top: 5px;
            height: 290px;

        }
        .table2{
            background-color: wheat;
            border: 1px solid ;
            margin-left: auto;
            margin-right: auto;
            width: 380px;
        }
        input{
            text-align: center;
        }
    </style>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1 style="margin-right: auto ; margin-left: 600px"> درگاه پرداخت </h1>
<table class="table2">
    <tr>
        <th>شماره کارت مورد تایید : 6037991772772516</th>
    </tr>
    <tr >
        <th >925 : معتبر cvv2 </th>
    </tr>
    <th>ماه و سال معتبر : 04/01</th>
    <tr>
        <th>رمز دوم معتبر : 862160</th>
    </tr>
</table>
<table class="table">
    <form method="post" action="#">
        <label>
            <tr>
                <th><input name="number" type="text" placeholder="card number" style="width: 250px; height: 30px  "></th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;شماره کارت </th>
            </tr>
            <tr></tr>
            <tr>
                <th><input name="cvv2" type="text" placeholder="cvv2" style=" height: 30px"></th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cvv2</th>
            </tr>
            <tr></tr>
            <tr>
                <th><input name="sal" type="text" placeholder="sal" style="width: 100px;  height: 30px">
                    <input name="mah" type="text" placeholder="mah" style="width: 100px; height: 30px"></th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ماه / سال</th>
            </tr>
            <tr></tr>
            <tr>
                <th><input name="pass" type="text" placeholder="password" style="width: 100px; height: 30px"></th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;رمز دوم   </th>
            </tr>
            <tr></tr>
            <tr>
                <th><input name="pay" type="submit" value="پرداحت" style="width: 100px; height: 30px ; background-color: green"></th>
            </tr>
        </label>
    </form>
</table>
</body>
</html>
<?php
$card=@ $_POST["number"];
$cvv2 = @$_POST["cvv2"];
$mah = @$_POST["mah"];
$sal = @$_POST["sal"];
$pass = @$_POST["pass"];

if (isset($_POST["pay"])) {
    if ($card == 6037991772772516 && $cvv2 == 925 && $mah == 01 && $sal==04 && $pass==862160) {
        header('location: 1.php');
    } else header('location: 2.php');
}