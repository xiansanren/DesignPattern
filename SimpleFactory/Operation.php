<?php 
/**
* 计算器类
*/
abstract class Operation
{
	public $opt1;
    public $opt2;

	function __construct($opt1, $opt2)
	{
		$this->opt1 = $opt1;
		$this->opt2 = $opt2;
	}

    abstract public function getResult();
}