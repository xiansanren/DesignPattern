<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>商场收银服务</title>
    <link rel="stylesheet" href="">
</head>
<body>
<form action="./" method="post" accept-charset="utf-8">
    单价：<input type="number" name="unitPrice" value="" placeholder=""><input type="submit" name="" value="添加"><br />
    数量：<input type="number" name="number" value="" placeholder="">
    <input type="reset" name="" value="重置">

</form>
</body>
</html>
<?php
include 'CaseNormal.php';
include 'CashReturn.php';
include 'Discount.php';
$data = [
    [ 'id1' => ['price'=>'9.3', 'num'=>2] ],
    [ 'id2' => ['price'=>'9', 'num'=>4] ],
    [ 'id3' => ['price'=>'18', 'num'=>1] ]
];

function settlement($data){
    $result = ['total'=>0, 'list'=>[]];
    if($data && is_array($data)){
        foreach ($data as $key=>$val){
            $result['total'] += ($val['price']*$val['num']);
            $result['list'][] = "单价：".$val['price'].', 数量：'.$val['num'];
        }
    }
    return $result;
}

$total = settlement($data);

$type = $_POST['type'];
$cash = null;
switch ($type){
    case "normal":
        $cash = new CaseNormal();
        break;
    case "return":
        $cash = new CashReturn(300, 100);
        break;
    case "discount":
        $cash = new Discount(0.8);
        break;
    default:
        break;
}
if($cash){
    echo $cash->acceptCase($total['total']);
}