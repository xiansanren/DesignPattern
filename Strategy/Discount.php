<?php

/**
 * Created by PhpStorm.
 * User: ggjrw
 * Date: 17-4-27
 * Time: 下午3:57
 */
include_once 'Cash.php';
class Discount extends Cash
{
    private $discount;
    
    function Discount($discount){
        $this->discount = $discount;
    }
    
    public function acceptCase($money)
    {
        return round($money*($this->discount));
    }
}