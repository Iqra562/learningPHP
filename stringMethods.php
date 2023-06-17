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
echo substr_count($subcount,  "This");
 ?>
 <h3>String Position</h3>
 <?php
 $pos="i love php , i love php too";
//  strpos is case-sensitive //
echo "strpos : " . strpos($pos,"i") . "<br>";
// searching from end //
echo "strrpos : " . strrpos($pos,"i") . "<br>";
//  stripos is case-insensitive //
echo "strpos : " . stripos($pos,"I") . "<br>";
echo "strrpos : " . strripos($pos,"I") . "<br>";

 ?>
 <h3>Search Functions </h3>
 <?php
 $strstr="php is server side scripting language";
 echo strstr($strstr,"server") . "<br>";
 echo strpbrk($strstr,"c") ;
 
 ?>
 <h3>Substring</h3>
 <?php
 $subStr="PHP is server sid escripting language";
 echo substr($subStr,12) . "<br>";
 echo substr($subStr,6,7);
 ?>
 <h3>String Replace function</h3>
 <?php
 $strRep="coffe is cold and cold coffe ";
echo  str_replace("cold","hot",$strRep)."<br>";
// through an array //
$find=["coffe","cold"];
$replac=["tea","hot"];
echo str_replace($find,$replac, $strRep)."<br>";
echo substr_replace($strRep,"tasty",0,17)."<br>";
echo strtr($strRep,"oa","zz")."<br>";
$array= ["cold"=>"hot","coffe"=>"tea"];
echo strtr($strRep,$array);

 ?>
 <h3>string Compare Functions</h3>
 <?php
  echo strcmp("hellow","hellow");
 
 ?>
 <h3>string reverse function</h3>
 <?php
 echo strrev("hello world") . "<br>";
 echo str_shuffle("hello world");
 ?>
 <h3>String Pad  & repeatFun
 </h3>
 <?php
 $pad="helllo";
 echo str_pad($pad, 20 ,".",STR_PAD_BOTH). "<br>";
 echo str_repeat($pad,3)
 ?>
 <h3>Trim & chop Fun</h3>
 <?php
 $trim = "hello";
 echo trim($trim,"h"). "<br>";
//  it removes from right 
 echo chop($trim,"o");
 ?>
 <h3>Add $ strip slashes fun</h3>
 <?php
 $add= "Hello  my name is 'coffee'";
 echo $add1 = addslashes($add) . "<br>";
 echo stripslashes($add1);
  echo addcslashes($add,"A..Za..z"). "<br>";
 echo stripcslashes($add)  ;
 
 ?>
 <h3>html entities</h3>
 <?php
 $bold = "this 'line ' is <b>bold</b>";
//  see in view page source //
 echo htmlentities($bold);
 
 ?>
 <h3>strip tags and wordwrap fun</h3>
 <?php
 $strip = "Hello <b>world</b>, hello <i>world</i>";
 echo $strip . "<br>";
 echo strip_tags($strip). "<br>";
 echo strip_tags($strip,"<b>") . "<br>";
 $wrap = "php is scripting language";
 echo wordwrap($wrap,4,"<br>",true)
 ?>