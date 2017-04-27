<?php

error_reporting(E_ALL);
$total = $_GET['total'];
$type = $_GET['type'];
$cash = null;
switch ($type){
    case "normal":
        $cash = new CaseNormal();
        break;
    case "return":
        $cash = new CashReturn(300, 100);
        break;
    case "discount":
        $cash = new Discount(0.8);
        break;
    default:
        break;
}
if($cash){
    echo $cash->acceptCase($total);
}