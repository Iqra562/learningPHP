<?php
// multidimensional associative array array //
$employeData = [
   '1' => ['name'=>"Fatima",'designatio'=>"Manager",'salary'=>100000],
   '2' =>  ['name'=>"Ilbilgey",'designatio'=>"Content writer",200000],
   '3' => ['name'=>"Abbas",'designatio'=>"Artist",'salary'=>40000],
   '4' =>  ['name'=>"Halima",'designatio'=>"Incharge",'salary'=>200000],
   '5' =>  ['name'=>"Usman",'designatio'=>"Owner",'salary'=>5550000]
];
echo '<pre>';
echo print_r($employeData);
echo '</pre>';
foreach($employeData as $key => $value1){ 
 echo $key;
    foreach($value1 as $key =>  $value2){
        echo $key . ' = '. $value2 .'  ,';

    }
    echo '<br>';
}
?>
<table border="1px" style="width:100%">
<tr>
    <th>Employee ID</th>
    <th>Employee Name</th>
    <th>Employee Designation</th>
    <th>Employee Salary</th>
</tr>
    <?php

foreach($employeData as $key => $value1){
    ?>
        <tr>
    <td>
        <?php echo $key;?>
    </td>
        <?php
    foreach($value1 as $key =>  $value2){
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
