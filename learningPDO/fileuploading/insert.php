<?php
include("query.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <title>Insert Product</title>
</head>
<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="p_name" id="" class="form-control">
            </div>
          
            <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" name="p_image" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">category ID</label>
                <select class="form-control" name="c_id" id="">
                    <option value="">Selcet category</option>
                    <?php
                    $query =$pdo->query("select * from category");
                    $result = $query ->fetchAll(PDO::FETCH_ASSOC);
                    // echo $result;
                    foreach($result as $data){
                        
                        ?>
                        <option value="<?php   echo $data['id']?>"><?php echo $data['id']?></option>
                        <?php
                    }

                    
                    ?>
                </select>
            </div>
            <input type="submit" name="addPro" id="" value = "Add Product" class="btn btn-info">
        </form>
    </div>
</body>
</html>