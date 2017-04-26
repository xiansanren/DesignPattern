<?php 
include_once './Operation.php';
class OperationMultiply extends Operation
{
	public function getResult(){
		return $this->opt1 * $this->opt2;
	}
}