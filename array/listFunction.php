<?php
$employeData = [
    [1,"Fatima","Manager",100000],
    [2,"Ilbilgey","Content writer",200000],
    [3,"Abbas","Artist",40000],
    [4,"Halima","Incharge",200000],
    [5,"Usman","Owner",5550000]
];
foreach($employeData as list($id,$name,$designation,$salary)){
    echo "$id $name $designation  $salary <br>";
}
?>
<br>
<br>
<?php
// associative array 

$employeDataAssoc = [
['name'=>"Fatima",'designation'=>"Manager",'salary'=>100000],
  ['name'=>"Ilbilgey",'designation'=>"Content writer",'salary'=>200000],
['name'=>"Abbas",'designation'=>"Artist",'salary'=>40000],
  ['name'=>"Halima",'designation'=>"Incharge",'salary'=>200000],
  ['name'=>"Usman",'designation'=>"Owner",'salary'=>5550000]
 ];
foreach($employeDataAssoc as list('name'=> $namea,'designation'=> $designationa,'salary'=> $salarya)){
    echo " $namea $designationa  $salarya <br>";
}

?>