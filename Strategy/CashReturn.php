<?php

/**
 * Created by PhpStorm.
 * User: ggjrw
 * Date: 17-4-27
 * Time: 下午4:41
 */
include_once 'Cash.php';
class CashReturn extends Cash
{
    private $baseMoney;
    private $operMoney;

    public function acceptCase($money)
    {
        if($money >= $this->baseMoney){
            $quotient = floor($money / $this->baseMoney);
            return $money - $quotient*$this->operMoney;
        }else{
            return $money;
        }
    }

    function CashReturn($baseMoney, $operMoney){
        $this->baseMoney = $baseMoney;
        $this->operMoney = $operMoney;
    }
}