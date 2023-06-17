<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<style>
     body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        
        .container {
            margin-top: 50px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
 font-size: 20px;
        }

        .input-group-text {
            color: #fff;
            border-color: #007bff;
            
        }

        .form-control {
            border-radius: 5px;
        }

        .title {
            font-size: 25px;
            margin-top: 20px;
        }

        .title span {
            font-weight: light;
            color: black;
            font-size:20px;
        }
</style>
<body>
    <div class="container">
    <form action="" method="post"  class="form-group" >
        <label for="" class="form-label">Enter notes:</label>
    <div class="input-group mb-3">
  <textarea type="text" class="form-control" name="text" rows="5" >  </textarea >
  <button class="input-group-text btn btn-primary" type="submit" name="summarize" >Create Title</button>
</div>
    </form>
    </div>
    <div class="container">
    <?php
   if(isset($_POST["summarize"])){
       $inp = $_POST['text'];
       $splitting = explode(" ", $inp);
       $countRepeatedWords = array_count_values($splitting);
       if($countRepeatedWords > 10){
       $getTitle =  array_slice($countRepeatedWords, rand(1,5),rand(5,10));

    } else{
        echo <s>
    };
       ?>
    <span class="title">Title :
       <?php
foreach($getTitle as $words => $numbers){

    if(strlen($words) > 4   ){
     $words_trim= trim(ucwords($words),",./:'");
       echo $words_trim; 
        
    
        

    };
};
    
};

    ?>
    </span>
    </div>
 
</body>
</html>