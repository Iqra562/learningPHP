<?php
// multidimensional index array //
$employeData = [
    [1,"Fatima","Manager",100000],
    [2,"Ilbilgey","Content writer",200000],
    [3,"Abbas","Artist",40000],
    [4,"Halima","Incharge",200000],
    [5,"Usman","Owner",5550000]
];
// echo $employeData[1][1] . "<br>";
// echo print_r($employeData)
foreach($employeData as $value){
  foreach($value as $innervalue){
 echo $innervalue ;
  }
  echo "<br>";
}
objectsKey($employeData)
?>
<table border="1px" style="width:100%">
<tr>
    <th>Employee ID</th>
    <th>Employee Name</th>
    <th>Employee Designation</th>
    <th>Employee Salary</th>
</tr>
    <?php

foreach($employeData as $value1){
    ?>
    <tr>
        <?php
    foreach($value1 as $value2){
        ?>
      <td><?php echo  $value2;?></td>   
     <?php
    }  
    ?>
    </tr>
    <?php
}
?>
</table>
