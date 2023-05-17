<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
</head>
<style>
    
</style>
<body>
    <?php
    if(isset($_POST['formInfo'])){
        $name = $_POST['nameStd'];
        $fatherName = $_POST['fatherName'];
        $class = $_POST['class'];
        $rollNumber = $_POST['rollNumber'];
        $biology = $_POST['biology'];
        $chemistry = $_POST['chemistry'];
        $Physics = $_POST['Physics'];
        $Mathematics = $_POST['Mathematics'];
        $Computer = $_POST['Computer'];
        $English = $_POST['English'];
        $Sindhi = $_POST['Sindhi'];
        $Urdu = $_POST['Urdu'];
        $BioPractical = $_POST['BioPractical'];
        $PhysicsPractical = $_POST['PhysicsPractical'];
        $ChemistryPractical = $_POST['ChemistryPractical'];
        $obtainMarks = ($biology+  $chemistry+ $Physics+  $Mathematics+$Computer+ $English+ $Sindhi+ $BioPractical + $PhysicsPractical+  $ChemistryPractical+ $ChemistryPractical) / 990 *100;
        // $grade .="";
        // total marks 950
        if($obtainMarks >80 && $obtainMarks <100){
            $grade = "A+";
        }elseif($obtainMarks >70 && $obtainMarks <80){
            $grade ="A";
        }elseif($obtainMarks > 60 && $obtainMarks <70){
            $grade = "B";

        }elseif($obtainMarks >50 && $obtainMarks <60){
            $grade = "C";
        }elseif($obtainMarks >40 && $obtainMarks <50){
            $grade = "D";
        }else{
            $grade = "You Are Fail ";
        }
    }
  
    ?>
    <form action="
     ">
     <div class="container">
              <div class="row">
<div class="col-md-12  stdData">

<h1>Board Of Intermediate</h1>
         <div>
            <h6>Name</h6><p> 
                <?php
             echo $name;
             ?>
             </p>
         </div>
         <div>
            <h6>Father Name</h6><p> <?php
             echo $fatherName;
             ?></p>
         </div>
         <div>
            <h6>Class</h6><p> <?php
             echo $class;
             ?></p>
         </div>
         <div>
            <h6>Roll Number</h6><p> <?php
             echo $rollNumber;
             ?></p>
         </div>

    <div>
        <h6>Biology</h6> <p> <?php
             echo $biology;
             ?></p>
    </div>
    <div>
        <h6>Chemistry</h6> <p> <?php
             echo $chemistry;
             ?></p>
    </div>
    <div>
        <h6>Physics</h6> <p> <?php
             echo $name;
             ?></p>
    </div>
    <div>
        <h6>Mathematics</h6> <p> <?php
             echo $Mathematics;
             ?></p>
    </div>
    <div>
        <h6>Computer</h6> <p> <?php
             echo $Computer;
             ?></p>
    </div>
    <div>
        <h6>English</h6> <p> <?php
             echo $English;
             ?></p>
    </div>
    </div>
<div class="col-md-6">

    <div>
        <h6>Sindhi</h6> <p> <?php
             echo $Sindhi;
             ?></p>
    </div>
    <div>
        <h6>Urdu</h6> <p> <?php
             echo $Urdu;
             ?></p>
    </div>
    <div>
        <h6>Bio Practical</h6> <p> <?php
             echo $BioPractical;
             ?></p>
    </div>
    <div>
        <h6>Physics Practical</h6> <p> <?php
             echo $PhysicsPractical;
             ?></p>
    </div>
    <div>
        <h6>Chemistry Practical</h6> <p> <?php
             echo $ChemistryPractical;
             ?></p>
    </div>
    <div>
        <h6>Obtain Marks</h6> <p> <?php
             echo $obtainMarks;
             ?></p>
    </div>
    <div>
        <h6>Grade</h6> <p> <?php
             echo $grade;
             ?></p>
    </div>
    
</div>

              </div>
              </div>
</form>
</body>
</html>