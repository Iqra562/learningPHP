<h3>Array FLip & Array Change Key Case Functions</h3>
<?php
$flipArray = [ 
    'a'=>'red',
    'b'=>'blue',
    'c'=>'green',
    'd'=>'yellow'
];
$newFlipArray=array_flip($flipArray);
$newFlipArray2=array_flip($newFlipArray);
echo '<pre>';
echo print_r($newFlipArray);
echo print_r($newFlipArray2);
echo '</pre>';
// change key case function //
$changeKeyCase=array_change_key_case($flipArray,CASE_UPPER);
echo '<pre>';
echo print_r($changeKeyCase);
echo '</pre>';

?>
<h3>Array Sum & Array Product</h3>
<?php
$sumArray=[2,3,4,4,2,4,2,4,6,'a'=>6,4,78,9,7,4,85];
echo 'Sum =' .array_sum( $sumArray). '<br>';
echo 'Product =' . array_product($sumArray);
?>
<h3>Array Rand & Shuffle Function</h3>
<?php
$randArray=['yellow','blue','green','purple','black','gray','skyblue','pink','brown','orange'];
$newRandArray= array_rand($randArray);
$newRandArray1=$randArray[$newRandArray];
echo '<pre>';
print_r ($newRandArray1);
echo '</pre>';
shuffle($randArray);
echo '<pre>';
print_r ($randArray);
echo '</pre>';

?>
<h3>Array Fill & ArrayFillKeys</h3>
<?php
$fillKeysArray=['a','b','c','d','e','f','g'];
$newFillKeysArray=array_fill_keys($fillKeysArray,'Testing');
echo '<pre>';
print_r ($newFillKeysArray);
echo '</pre>';
// array fill // it doesn't need array
$arrayFill=array_fill(-2,6,'Testing');
echo '<pre>';
print_r ($arrayFill);
echo '</pre>';


?>
<h3>Array Walk & Array </h3>
<?php

$multidi=[
    'Veggie'=>[
        'a'=>'carrot',
        'b'=>'chilli',
    ],
    'Pakistan'=>'Karachi',
    'PakiStan'=>'Lahore',
    'PaKistan'=>'Quetta',
    'Pakistn'=>'Islamabad',
    '--'=>'--'
];
array_walk_recursive($multidi,'myFunction','is a city of');
'<br>';
"<br>";

$city=[
    'Pakistan'=>'Karachi',
    'PakiStan'=>'Lahore',
    'PaKistan'=>'Quetta',
    'Pakistn'=>'Islamabad',
    'PakistaN'=>'Faisalabad'
];

array_walk($city,'myFunction','is a city of');


function myFunction($value,$key,$para){
echo "$value $para $key <br>";
};
?>