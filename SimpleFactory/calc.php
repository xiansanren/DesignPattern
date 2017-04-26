<?php
error_reporting(E_ALL);
include 'OperationFactory.php';
if($_POST){
    $calc = new OperationFactory();
    $result = $calc::createOperation($_POST['opt1'], $_POST['opt2'], $_POST['act'])->getResult();
    echo "计算结果为：".$result;
}
