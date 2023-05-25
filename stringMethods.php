<h3>Explode , Implode &Join Functions</h3>
<?php
$str ="hellow world. It's a beautiful day.";
$strarray =explode(" ", $str,-1);
echo "<pre>";
print_r($strarray);
echo "</pre>";
$str1=['hellow','world'];
// $str1Array=implode(' ',$str1);
$str1Array=join("<br>",$str1);
echo $str1Array;
 ?>
 <h3>String splite and chunk functions </h3>
 <?php
 $split = "Hello World!";
 $newSplit = str_split($split,2);
 $newChunk= chunk_split($split,2,"..");
 echo ($newChunk);
 echo "<pre>";
print_r($newSplit);
echo "</pre>";
 ?>
 <h3>String Case Functions</h3>
 <?php
 $case = "Hello World is hellow";
 $newCase = strtoupper($case);
 $newCase = strtolower($case);
 $newCase = ucfirst($case);
 $newCase = lcfirst($case);
 $newCase = ucwords($case);
 echo $newCase; 
 
 ?>
 <h3>String LEngth & count</h3>
 <?php
$stringLen ="hellow world";
$newlen= strlen($stringLen);
echo $newlen;
// $strcount = str_word_count($stringLen);
$strcount = str_word_count($stringLen,1);
// $strcount = str_word_count($stringLen,2);
 echo "<pre>";
 print_r($strcount);
 echo "</pre>";
// substring count function //
$subcount= "This is a bag. This is a car";
echo substr_count($subcount,  "a");
 ?>