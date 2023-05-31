<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
    <form action="" method="post">
    <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" name="text">
  <button class="input-group-text " id="basic-addon2" type="submit" name="summarize" >@example.com</button>
</div>
    </form>
    </div>
    <?php
   if(isset($_POST["summarize"])){
    $inp = $_POST['text'];
    $splitting = explode(" ", $inp);
    $countRepeatedWords = array_count_values($splitting);
    $getTitle =  array_slice($countRepeatedWords,rand(1,5),rand(5,10));
//    $main = array_count_values($e);
// print_r($e);

foreach($getTitle as $words => $numbers){
    if(strlen($words) > 4   ){
        echo  $words . " " ;
        // $ss =  explode(" ", $key);
        // echo  $key . "+" ;
// print_r(array_merge( $ss));      
// $c = ["$key"];

    };
};
    
};

    ?>
 
</body>
</html>