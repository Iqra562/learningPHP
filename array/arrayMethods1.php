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