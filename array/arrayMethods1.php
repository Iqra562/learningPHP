<h3>array replace function</h3>
<?php
// array replace method for single array 
$fruits = ['orange','mango','a'=>'lemon','cherry'];
$vege =['a'=>'carrot',1=>'chillli'];
$vegeZ = ['chilli','carrot'];
$mixup = array_replace($fruits,$vege);
$mixupZ = array_replace($fruits,$vegeZ);

echo '<pre>';
echo print_r($mixup);
echo '</pre>';
echo '<pre>';
echo print_r($mixupZ);
echo '</pre>';
// array_replaxce_recursive method for  multidimensional array 
$array1 = [
    "a"=>['apple'],
    "b" =>['banana','grapes']
];
$array2 = [
    "a" => ['red'],
    "b" => ['yellow']
];
$mixArray = array_replace_recursive($array1,$array2);
echo '<pre>';
echo print_r($mixArray);
echo '</pre>';

?>
<h3>Array Pop & Push Function</h3>
<!-- pop $ push function  -->
<?php
$fruitsList =['apple','mango','banana'];
array_pop($fruitsList);
array_pop($fruitsList);
echo '<pre>';
echo print_r ($fruitsList);
echo '</pre>';
array_push($fruitsList,'chiilli','pineapple');
echo '<pre>';
echo print_r ($fruitsList);
echo '</pre>';
?>
<h3>shift & unshift</h3>
<!-- shift and unshift function   -->
<?php
$fruitShift =['apple','mango','banana'];
array_shift($fruitShift);
echo '<pre>';
echo print_r ($fruitShift);
echo '</pre>';
array_unshift($fruitShift,'cherry','bubble');
echo '<pre>';
echo print_r ($fruitShift);
echo '</pre>';
?>
<h3>Array merge  & Array combine </h3>
<?php
// index array 
$A = ['a','b','c','d'];
$B=[1,2,3];
$C = ['e','f','g' ];
$z= array_merge($A,$B);
echo '<pre>';
echo print_r($z);
echo '</pre>';
// associative array 
$color =['a'=>'red','b'=>'blue','c'=>'green'];
$number=['cat','dog','a'=>'elephant'];
$merge = array_merge($number,$color);
echo '<pre>';
echo print_r($merge);
echo '</pre>';
// complex array 
$complexArray1 = ['a'=>"orange",'b'=>"white",'c'=>"grapes",];
$complexArray2=['b'=>['color'=>['red','blue','green']],'e'=>'black','d'=>'violet'];
$newArray = array_merge_recursive($complexArray1,$complexArray2);
echo '<pre>';
echo print_r($newArray);
echo '</pre>';
// array combine funtion work only with index array 
// add same quantity values in both array 
$combineArray1 =['Ali','Asia','Amir'];
$combineArray2 = [22,23,24];
$newCombineArray = array_combine($combineArray1,$combineArray2);
echo '<pre>';
echo print_r($newCombineArray);
echo '</pre>';
?>
<h3>array slice function</h3>
<?php
$name =['fatima','zehra','rabia','manahil'];
$newName = array_slice($name,1,2);
$newName1 = array_slice($name,-2,2,true);
// 4th parameter is preserve parameter which shows preserve iindex number 
echo '<pre>';
echo print_r($newName);
echo print_r($newName1);
echo '</pre>';

?>
<h3>array splice function</h3>
<?php
$splice1 =['red','green','yellow'];
$splice2 =['orange','banana'];
array_splice($splice1,2,1,$splice2);
array_splice($splice2,1,1);
echo '<pre>';
echo print_r($splice1);
echo print_r($splice2);
echo '</pre>';
$splicecount =['red','green','yellow','pineapple','cherry','mango','apple','carrot','chillii'];
array_splice($splicecount,2,count($splicecount));
echo '<pre>';
echo print_r($splicecount);
echo '</pre>';
?>
<h3>Array Key Functions</h3>
<?php
$key = [
    'first'=>'iqra',
    'second'=>'manahil',
    'third'=>'fiza',
    'fourth' =>'asma',
    'fifth'=>'shazma',
    'sixth'=>'shumaila',
    'seventh'=>'deesha',
    'eigth' =>'mehak'
];
$key1=array_keys($key);
$key2=array_key_first($key);
$key3=array_key_last($key);
$key4=array_key_exists('sixth',$key);
echo '<pre>';
echo print_r($key1);
echo print_r($key2).'<br>';
echo print_r($key3).'<br>';
echo print_r($key4).'<br>';
echo '</pre>';

?>
<h3>Array Intersect Functions</h3>
<?php
$intersect1 = ['a'=>'red','2'=>'blue','c'=>'green'];
$intersect2=['a'=>'blue','b'=>'black','c'=>'green'];
$intersect3=array_intersect($intersect1,$intersect2);
$intersect4=array_intersect_key($intersect1,$intersect2);
// assoc function matches both key and value //
$intersect5=array_intersect_assoc($intersect1,$intersect2);
echo '<pre>';
echo print_r($intersect3);
echo print_r($intersect4).'<br>';
echo print_r($intersect5);
echo '</pre>';
// user defined assoc function //
function compare($a,$b){
    if($a===$b){
return 0;
    }
    return ($a>$b)? 1 :  -1;

}
$userdefined=array_intersect_uassoc($intersect1,$intersect2,'compare');
echo '<pre>';
echo print_r($userdefined);
echo '</pre>';
?>