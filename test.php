<?php
$arr=[0=>3,11=>1,22=>1,44=>2];
$min=min($arr);
$result=array_search(2, $arr);
$result=$arr;
// unset($result[0]);
$ar=array(  array( 'a'=> 1));
function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));