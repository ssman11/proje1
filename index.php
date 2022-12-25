<?php
$x=$_POST['one'];
$y=$_POST['two'];

$num = 1;
$array = [];
$array1 = [];

if ($x>$y) {
    $max=$x;
}else{
    $max=$y;
}

$num =$max;
while ($num){
    if ($x%$num == 0) {
        $array[]= $num;
    }
    if ($y%$num == 0){
        $array1[]= $num;
    }
    --$num;
}
$bmm= array_intersect($array, $array1);
echo "ب.م.م :" . current($bmm) . '<br>';
$num = $max;
while ($num) {
    $array[] =$x*$num;
    $array1[] = $y*$num;

    --$num;

}


$kmm = array_intersect($array, $array1);
echo "ک.م.م  :"  . end($kmm) . "<br>";