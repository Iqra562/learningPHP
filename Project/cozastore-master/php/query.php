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




<?php
if(isset($_POST['logIn']))
{

    // $username = $_POST['adminName'];
    $password = $_POST['adminPassword'];
    $email = $_POST['adminEmail'];
    $query=$pdo->prepare("select * from user where  admin_password= :password && admin_email= :email");
    // $query->bindParam("name", $username);
    $query->bindParam("password",$password);
    $query->bindParam("email",$email);
    // $query->bindParam("email",$email);
    $query->execute();
    $result= $query->fetch(PDO::FETCH_ASSOC);
    if($result){
        $_SESSION['user_id'] = $result['user_id'];
        $_SESSION['user_name'] = $result['user_name'];

        // echo "<script>alert('valid data')</script>";
        header("location:index.php");
        

    }
    else{
  
        echo "<script>alert('invalid data')</script>";



    }
}
?>
<?php
if(isset($_GET['checkout'])){
    $user_id = $_SESSION['user_id'] ;
    $user_name  = $_SESSION['user_name'];
    foreach($_SESSION['cart'] as $key => $value){
        $id = $value['p_id'];
        $name = $value['p_name'];
        $price= $value['p_price'];
        $qty = $value['num-product'];
        $query = $pdo->prepare('INSERT  into orders(product_id,product_name,product_price,product_qty,user_id,user_name) values(:p_id,:p_name,:p_price,:p_qty,:u_id,u_name)');
        $query->bindParam('u_id',$user_id);
        $query->bindParam('u_name',$user_name);
        $query->bindParam('p_id',$id);
        $query->bindParam('p_name',$name);
        $query->bindParam('p_price',$price);
        $query->bindParam('p_qty',$qty);
        $query->execute();

        echo "<script>alert('Order Added Successfully')</script>";
        unset($_SESSION['cart']);
    };
}

?>
