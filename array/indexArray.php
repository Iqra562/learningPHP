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
?>
<table border="1px" style="width:100%">

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
