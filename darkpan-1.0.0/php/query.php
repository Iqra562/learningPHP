<?php
include("connection.php");
<img src="" alt="">


if(isset($_POST['addPro'])){
$p_image = $_FILES['p_image']['name'];
$p_image_size = $_FILES['p_image']['size'];
$p_image_tmp_name = $_FILES['p_image']['tmp_name'];
$p_image_ext = pathinfo($p_image, PATHINFO_EXTENSION);
$destination = "images/".$p_image;
if($p_image_size <= 48000000){
if($p_image_ext == 'jpg' || $p_image_ext == "png" || $p_image_ext== 'jpeg' || $p_image_ext== 'webp'){
    if(move_uploaded_file($p_image_tmp_name,$destination)){
        $query= $pdo -> prepare("UPDATE category
        SET category_image = :p_image
        WHERE  category_id =5");
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