<?php
// $arr=[1,2,3,4,5,6,7,8,9];

//冒泡排序
// function  Shod($arr)
// {
//   $count=count($arr);
//   $a=[];
//   $b=[];
//   for ($i=0; $i < $count; $i++) { 
//      if($arr[$i]%2==1)
//      {
//         $b[]=$arr[$i];
//      }else{
//         $a[]=$arr[$i];
//      }
//   }
//   $are=array_merge($a,$b);
//   return $are;
// }

// $res=Shod($arr);
// print_r($res);
//1 10  11 12 13
// $a=1;
// $b=&$a;
// unset($b);
// echo $a;

// rawurlencode(str);
// urlencode(str);
//php传值和传引用的区别
// $where=['user'=>'李四','price'=>array(1,2,3)];
// foreach ($where['price'] as $key => $value) {
// 	$arr[$key]['user']=$where['user'];
// 	$arr[$key]['price']=$where['price'][$key];
// }
// print_r($arr);
// $str="student. a am I";
// function   ReverseSentence($str)
// {
//    $a=explode(' ', $str);
//   krsort($a);
//   $arr=implode(' ', $a);
//    // var_dump($a);die;
// 	return   $arr;
// }

//  echo   ReverseSentence($str);
function   Sum_Solution($n)
{
  // return  1111;
 $d=$n+$n+$n; 
 return $d;
}
echo Sum_Solution(5);


