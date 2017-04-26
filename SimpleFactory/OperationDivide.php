<?php 
include_once './Operation.php';
class OperationDivide extends Operation
{
	public function getResult(){
		if(0 == $this->opt2){
			return "除数不能为0";
		}
		return $this->opt1 / $this->opt2;
	}
}