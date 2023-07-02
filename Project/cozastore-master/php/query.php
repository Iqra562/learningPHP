<?php
include("connection.php");
session_start();
// query for delete cart from cart session 
if(isset($_GET['remove'])){
    foreach($_SESSION['cart'] as $key => $value){
        if($_GET['remove'] == $value['p_id']){
unset($_SESSION['cart'][$key]);
$_SESSION['cart']=array_values($_SESSION['cart']);
echo "<script>
alert('product removed successfully');
location.assign('shoping-cart.php');
</script>";
}
}
}
?>
