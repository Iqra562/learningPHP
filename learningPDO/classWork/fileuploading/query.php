<?php
include("connections.php");


if(isset($_POST['login']))
{
    $username = $_POST['name'];
    $password = $_POST['password'];
    $query=$pdo->prepare("select * from user where name= :name && password= :pass");
    $query->bindParam("name", $username);
    $query->bindParam("pass",$password);
    $query->execute();
    $result= $query->fetch(PDO::FETCH_ASSOC);
    if($result){
        $_SESSION['id'] = $result['id'];
        echo "<script>alert('valid data')</script>";
        header("location:select.php");
        

    }
    else{
  
        echo "<script>alert('invalid data')</script>";



    }
}


if(isset($_POST['addPro'])){
$p_name = $_POST['p_name'];
$c_id= $_POST['c_id'];
$p_image = $_FILES['p_image']['name'];
$p_image_size = $_FILES['p_image']['size'];
$p_image_tmp_name = $_FILES['p_image']['tmp_name'];
$p_image_ext = pathinfo($p_image, PATHINFO_EXTENSION);
$destination = "images/".$p_image;
if($p_image_size <= 48000000){
if($p_image_ext == 'jpg' || $p_image_ext == "png" || $p_image_ext== 'jpeg'){
    if(move_uploaded_file($p_image_tmp_name,$destination)){
        $query= $pdo -> prepare("insert into products(pro_name,c_id,p_image) values(:p_name,:c_id,:p_image)");
        $query -> bindParam('p_name', $p_name);
        $query -> bindParam('c_id', $c_id);
        $query -> bindParam('p_image', $p_image);
        $query -> execute();
        echo "<script>alert('product added succesfully')</script>";
    }

}else{
    echo "<script>alert('not valid extension')
    location.assign('insert.php')
    </script>";
}

}else{
    echo "file size is greater";
}



}

?>