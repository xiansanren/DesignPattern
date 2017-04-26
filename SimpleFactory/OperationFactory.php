<?php 
/**
* 
*/
include 'OperationAdd.php';
include 'OperationDivide.php';
include 'OperationMultiply.php';
include 'OperationSubtract.php';
class OperationFactory 
{
     public static function createOperation($opt1, $opt2, $operate){
		$oper = null;
		switch ($operate) {
			case 'add':
				$oper =  new OperationAdd($opt1, $opt2);
				break;
			case 'subtract':
				$oper = new OperationSubtract($opt1, $opt2);
				break;
			case 'multiply':
				$oper = new OperationMultiply($opt1, $opt2);
				break;
			case 'divide':
				$oper = new OperationDivide($opt1, $opt2);
				break;
			default:
				break;
		}
		return $oper;
	}
}