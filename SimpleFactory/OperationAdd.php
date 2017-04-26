<?php 
include './Operation.php';
class OperationAdd extends Operation
{
	public function getResult(){
		return $this->opt1 + $this->opt2;
	}
}