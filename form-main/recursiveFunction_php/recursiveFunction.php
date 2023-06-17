<!-- we call current function within function. It is also known as recursion. -->
<?php
function example($x){
    if($x <= 5){
        echo $x . "<br>";
        example($x +1);
    }
}
example(1);

?>