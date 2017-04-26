<?php 
include_once './Operation.php';
class OperationSubtract extends Operation
{
	public function getResult(){
		return $this->opt1 - $this->opt2;
	}
}