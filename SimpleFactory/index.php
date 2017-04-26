<?php 
error_reporting(E_ALL);
include 'OperationFactory.php';
	if($_POST){
		$calc = new OperationFactory();
		echo $calc::createOperation($_POST['opt1'], $_POST['opt2'], $_POST['act'])->getResult();
	}else{
		 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>计算器</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post" accept-charset="utf-8">
		<input type="number" name="opt1" value="" placeholder="">
		<select name="act" >
			<option value="add">+</option>
			<option value="subtract">-</option>
			<option value="multiply">*</option>
			<option value="divide">/</option>
		</select>
		<input type="number" name="opt2" value="" placeholder="">
		<input type="submit" name="" value="=">
	</form>
</body>
</html>
		 <?php 
	} ?>
