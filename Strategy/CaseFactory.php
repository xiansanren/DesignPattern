<?php

/**
 * Created by PhpStorm.
 * User: ggjrw
 * Date: 17-4-27
 * Time: 下午5:53
 */
include 'CaseNormal.php';
include 'CashReturn.php';
include 'Discount.php';
class CaseFactory
{
    public static function createCash($type, $data){
        $cash = null;
        switch ($type){
            case "normal":
                $cash = new CaseNormal();
                break;
            case "return":
                $cash = new CashReturn($data['base'], $data['oper']);
                break;
            case "discount":
                $cash = new Discount($data['discount']);
                break;
            default:
                break;
        }
        return $cash;
    }
}