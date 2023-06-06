<?php
include("connections.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            if(isset($_SESSION['id'])){
            $query  = $pdo->query("select * from products");
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $data){
                ?>
                <div class="col-md-3">
                    <div class="card" >
                <img class="card-img-top" src="images/<?php echo $data['p_image']?>" alt="">
                <div class="card-body">
                <div class="card-title"><?php echo $data['pro_name']?>
                </div>
                </div>
                </div>
            </div>
                <?php
            } 
        
                ?>
        </div>
        <button class="btn btn-primary"><a class="text-white" href="logout.php">logout</a></button>
        <?php
            }
            else{
                header("location:login.php");
            }
        ?> 
    </div>
</body>
</html>