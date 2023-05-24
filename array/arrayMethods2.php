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
<h3>Array Map Function</h3>
<?php
$mapArray = [3,4,5,6,7,8,9,10];
$mapArray2=['apple','mango','banana','orange','pineapple','grapes','parrot','d'=>'lemon','chilli'];
$newMapArray= array_map('square',$mapArray,$mapArray2);
// $newMapArray= array_map(null,$mapArray,$mapArray2);
function square($value1,$value2){
    return $value1 * $value1 .' ' . $value2;
//   return [$value1 => $value2];
}
echo '<pre>';
print_r ($newMapArray);
echo '</pre>';
?>
<h3>Array Reduce Function</h3>
<?php
$reduceArray =['orange','banana','carrot','cherry'];
$newReduceArray= array_reduce($reduceArray,'reducefunction','lemon');
function reducefunction($z,$reduceValue){
    return  $z. '-' .$reduceValue ;

}
echo '<pre>';
print_r ($newReduceArray);
echo '</pre>';
?>
<h3>Array Sorting Functions</h3>
<?php
 $sortingArray=['Iqra','Fiza','Manahil','Deesha','Mehak','Shazma','Shumaila','Asma'];
 // $sortingArray=[1,2,10,45,3];
 // ascending order sorting
sort($sortingArray);
// descending order sorting
rsort($sortingArray);

echo '<pre>';
print_r ($sortingArray);
echo '</pre>';
$sortingArrayAssoc=['a'=>'Iqra','b'=> 'Fiza',
'c'=> 'Manahil', 'd'=> 'Deesha','e'=> 'Mehak', 
'f'=> 'Shazma', 'g'=> 'Shumaila', 'h'=> 'Asma'];
// sort($sortingArrayAssoc);
// associative array sort //
// asort($sortingArrayAssoc);
// associative reverse sort //
// arsort($sortingArrayAssoc);
//sorting by key//
// ksort($sortingArrayAssoc);
// reverse soritn by key //
krsort($sortingArrayAssoc);
echo '<pre>';
print_r ($sortingArrayAssoc);
echo '</pre>';
//// natural order sorting ////
$naturalSorting=["img12","img3","img10","img5","img20","img55"];
natsort($naturalSorting);
// sort without case sensitive
$naturalSortingCaps=["Img12","img3","img10","img5","img20","Img55"];

natcasesort($naturalSortingCaps);
echo '<pre>';
print_r ($naturalSorting);
print_r ($naturalSortingCaps);
echo '</pre>';
//   multi array sorting//
// values should be in same quantity in both array   
$multiSort1=['apple','banana','fish','rice'];
$multiSort2=['Rain','man','lan','car'] ;
array_multisort($multiSort1,$multiSort2);
echo '<pre>';
print_r ($multiSort1);
print_r ($multiSort2);
echo '</pre>';
// reverse an arrary //
$reverse=['Rain','man','lan','car'] ; 
$newReverse =array_reverse($reverse);
echo '<pre>';
print_r ($newReverse);
echo '</pre>';
?>
