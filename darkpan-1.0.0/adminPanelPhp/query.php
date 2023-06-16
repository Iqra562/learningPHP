<?php
include("connection.php");
// queryies for category pages start
if(isset($_POST['update'])){
    $c_name = $_POST['model-name'];
    $c_id= $_POST['model-id'];
    $p_image = $_FILES['model-image']['name'];
    $p_image_size = $_FILES['model-image']['size'];
    $p_image_tmp_name = $_FILES['model-image']['tmp_name'];
    $p_image_ext = pathinfo($p_image, PATHINFO_EXTENSION);
    $destination = "cozastoreimages/".$p_image;
    $destinationProductCozastore = "/cozastore-master/databaseImage/".$p_image;

    if($p_image_size <= 48000000){
    if($p_image_ext === 'jpg' || $p_image_ext === "png" || $p_image_ext === 'jpeg'|| $p_image_ext === "webp"  || $p_image_ext === "" || $p_image === ""){
        if(move_uploaded_file($p_image_tmp_name,$destination)){
            $query= $pdo -> prepare("update category set category_name = :name,category_image=:image where category_id = :_id");
            $query -> bindParam('name', $c_name);
            $query -> bindParam('_id', $c_id);
            $query -> bindParam('image', $p_image);
            $query -> execute();
            echo "<script>alert('product added succesfully')</script>";
        }
     
    }else{
        echo "<script>alert('not valid extension')
        location.assign('adminPanelProducts.php')
        </script>";
    }
    
    }else{
        echo "file size is greater";
    }if($p_image_size == 0){
        if($p_image_ext === '' || $p_image === ""   ){
            
                $query= $pdo -> prepare("update category set category_name = :name where category_id = :_id");
                $query -> bindParam('name', $c_name);
                $query -> bindParam('_id', $c_id);
             
                $query -> execute();
                echo "<script>alert('your changes are saved !!')</script>";
            
        
        }
        
        }
    
    
    
    }


?>
<?php

if(isset($_POST['insertCategory'])){
    $p_name = $_POST['categoryName'];
    $p_image = $_FILES['categoryImage']['name'];
    $p_image_size = $_FILES['categoryImage']['size'];
    $p_image_tmp_name = $_FILES['categoryImage']['tmp_name'];
    $p_image_ext = pathinfo($p_image, PATHINFO_EXTENSION);
    $destination = "cozastoreimages/".$p_image;
    $destinationProductCozastore = "/cozastore-master/databaseImage/".$p_image;
    if($p_image_size <= 48000000){
    if($p_image_ext == 'jpg' || $p_image_ext == "png" || $p_image_ext== 'jpeg' || $p_image_ext== 'webp'){
        if(move_uploaded_file($p_image_tmp_name,$destination)){
            $query= $pdo -> prepare("INSERT into category(category_name,category_image) values(:p_name,:p_image)");
            $query -> bindParam('p_name', $p_name);
            $query -> bindParam('p_image', $p_image);
            $query -> execute();
            echo "<script>alert('product added succesfully')</script>";
        }
    
    }else{
        echo "<script>alert('not valid extension')
        location.assign('category.php')
        </script>";
    }
    
    }else{
        echo "file size is greater";
    }
    
    
    
    }
    
?>
 <!-- queryies for category pages end -->
 <!-- <img src="/cozastore-master/databaseImage" alt=""> -->
 <!-- queryies for product pages start -->
 <?php
 if(isset($_POST['update_product'])){
     $product_id_input= $_POST['product_id_input'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_category = $_POST['product_category'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_size = $_FILES['product_image']['size'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_ext = pathinfo($product_image, PATHINFO_EXTENSION);
    $destinationProduct = "cozastoreimages/".$product_image;
    $destinationProductCozastore = "/cozastore-master/databaseImage/".$product_image;
    if($product_image_size <= 48000000){
    if($product_image_ext === 'jpg' || $product_image_ext === "png" || $product_image_ext === 'jpeg'|| $product_image_ext === "webp"  || $product_image_ext === "" || $product_image === ""){
        if(move_uploaded_file($product_image_tmp_name,$destinationProduct)){
            $query= $pdo -> prepare("update products set product_name = :product_name,product_price = :product_price,product_category_id = :product_category_id,product_category_id =:product_category ,product_image=:product_image where product_id = :product_id");
            $query -> bindParam('product_id', $product_id_input);
            $query -> bindParam('product_name', $product_name);
            $query -> bindParam('product_price', $product_price);
            $query -> bindParam('product_category', $product_category);
            $query -> bindParam('product_image', $product_image);
            $query -> execute();
            echo "<script>alert('product added succesfully')</script>";
        }
     
    }else{
        echo "<script>alert('not valid extension')
        location.assign('category.php')
        </script>";
    }
    
    }else{
        echo "file size is greater";
    }if($product_image_size == 0){
        if($product_image_ext === '' || $product_image === ""   ){
            
                $query= $pdo -> prepare("update products set product_name = :product_name,product_price = :product_price,product_category_id =:product_category where product_id = :product_id");
                $query -> bindParam('product_id', $product_id_input);
                $query -> bindParam('product_name', $product_name);
                $query -> bindParam('product_price', $product_price);
            $query -> bindParam('product_category', $product_category);
                $query -> execute();
                echo "<script>alert('your changes are saved !!')</script>";
            
        
        }
        
        }
    
    
    
    }


?>
<?php

if(isset($_POST['insertProduct'])){
    $p_name = $_POST['productName'];
    $p_price = $_POST['productPrice'];
    $p_category = $_POST['product_category'];
    $p_image = $_FILES['productImage']['name'];
    $p_image_size = $_FILES['productImage']['size'];
    $p_image_tmp_name = $_FILES['productImage']['tmp_name'];
    $p_image_ext = pathinfo($p_image, PATHINFO_EXTENSION);
    $destination = "cozastoreimages/".$p_image;
    $destinationProductCozastore = "images/".$p_image;
    if($p_image_size <= 48000000){
    if($p_image_ext == 'jpg' || $p_image_ext == "png" || $p_image_ext== 'jpeg' || $p_image_ext== 'webp'){
        if(move_uploaded_file($p_image_tmp_name,$destination)){
            $query= $pdo -> prepare("INSERT into products(product_name,product_price,product_category_id,product_image) values(:p_name,:p_price,:p_category, :p_image)");
            $query -> bindParam('p_name', $p_name);
            $query -> bindParam('p_price', $p_price);
            $query -> bindParam('p_category', $p_category);
            $query -> bindParam('p_image', $p_image);
            $query -> execute();
            echo "<script>alert('product added succesfully')</script>";
        }
    }else{
        echo "<script>alert('not valid extension')
        location.assign('adminPanelProducts.php')
        </script>";
    }
    
    }else{
        echo "file size is greater";
    }
    
    
    
    }
    
?>
 <!-- queryies for product pages end -->

<!-- login into admin panel  start -->
<?php
if(isset($_POST['logIn']))
{

    $username = $_POST['adminName'];
    $password = $_POST['adminPassword'];
    // $email = $_POST['adminEmail'];
    $query=$pdo->prepare("select * from admins where admin_name= :name && admin_password= :password");
    $query->bindParam("name", $username);
    $query->bindParam("password",$password);
    // $query->bindParam("email",$email);
    $query->execute();
    $result= $query->fetch(PDO::FETCH_ASSOC);
    if($result){
        $_SESSION['admin_id'] = $result['admin_id'];
        // echo "<script>alert('valid data')</script>";
        header("location:adminPanelCategory.php");
        

    }
    else{
  
        echo "<script>alert('invalid data')</script>";



    }
}
?>

<!-- login into admin panel  end -->
<!-- logout from page  start -->
<?php
if(isset($_POST['logout'])){
    session_start();
    session_unset();
    header("location: signup.php");
}
?>
<!-- logout from page  end -->
<!-- sign in admin  start -->
<?php
if (isset($_POST['signIn'])) {
    $username = $_POST['adminName'];
    $password = $_POST['adminPassword'];
    $email = $_POST['adminEmail'];

    $query = $pdo->prepare("INSERT INTO admins (admin_name, admin_password, admin_email) VALUES (:adminName, :adminPassword, :adminEmail)");
    $query->bindParam(':adminName', $username);
    $query->bindParam(':adminPassword', $password);
    $query->bindParam(':adminEmail', $email);

    if ($query->execute()) {
        $_SESSION['admin_id'] = $pdo->lastInsertId(); // Set the session variable with the newly inserted admin_id
        header("location: adminPanelCategory.php");
        exit; // Terminate the script to prevent further execution
    } else {
        echo "<script>alert('Failed to create your account')</script>";
    }
}
?>


<!-- sign in admin  end -->