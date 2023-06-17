<?php
session_start();
$server = "mysql:host=localhost;dbname=admin panel";
$user = "root";
$password = "";

$pdo= new PDO($server,$user,$password);

?>

<!-- login into admin panel  start -->
<?php
if(isset($_POST['logIn']))
{
    echo "<script>alert('invalid data')</script";

    $username = $_POST['adminName'];
    $password = $_POST['adminPassword'];
    $email = $_POST['adminEmail'];
    $query=$pdo->prepare("select * from admins where admin_name= :name && admin_password= :password && admin_email = :email");
    $query->bindParam("name", $username);
    $query->bindParam("password",$password);
    $query->bindParam("email",$email);
    $query->execute();
    $result= $query->fetch(PDO::FETCH_ASSOC);
    if($result){
        $_SESSION['admin_id'] = $result['admin_id'];
        echo "<script>alert('valid data')</script>";
        header("location:adminPanelCategory.php");
        

    }
    else{
  
        echo "<script>alert('invalid data')</script>";



    }
}
?>

<!-- login into admin panel  end -->