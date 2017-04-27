<?php

/**
 * Created by PhpStorm.
 * User: ggjrw
 * Date: 17-4-27
 * Time: 下午4:47
 */
include_once 'Cash.php';
class CaseNormal extends Cash
{
    public function acceptCase($money)
    {
        return $money;
    }
}