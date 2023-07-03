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
        // echo "<script>alert('valid data')</script>";
        header("location:index.php");
        

    }
    else{
  
        echo "<script>alert('invalid data')</script>";



    }
}
?>
