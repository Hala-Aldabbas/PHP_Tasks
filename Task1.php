<?php
//1.a convert the entered string to Uppercase
$lowername="hala";
echo strtoupper($lowername);
echo "<br>";

//1.b convert the entered string to Lowercase
$uppername="HALA";
echo strtolower($uppername);
echo "<br>";

//1.c Make the first letter of the string Uppercase
$lowername="jordan";
echo ucfirst($lowername);
echo "<br>";

//1.d Make the first letter of each word capitalized
$word="hello world";
echo ucwords($word);
echo "<br>";

//2 numeric string to be a date format
$num="085119";
$time = strtotime($num);
echo date ('h:i:s' , $time );
echo "<br>";

 //3 check whether the sentence contains a specific word
 $sentence  = "i am afull stack development at orange coding academy";
 if(strpos($sentence, "orange") == true){
  echo "Word Found!";
  echo "<br>";
 }

 //4 extract the file name from the URL
 $url="www.orange.com/index.php";
//  $file_name=strstr( $url,'/',false);
 echo basename ($url);
 echo "<br>";

 //5 extract the username from the follwing email address
 $email="info@orange.com";
 $username=strstr($email,'@',true);
 echo $username;
 echo "<br>";

  //6 get the last three characters from the string
  $email="info@orange.com";
  $com=substr($email,-3);
  echo $com;
  echo "<br>";
  
  //7 generate simple random passwords
  function random_passwords($pass){
  $data="12345689922mieoejoicjpjejeeesdrftygu";
  return substr(str_shuffle($data),0,$pass);
  }
  echo random_passwords(12);
  echo "<br>";


  
  //8 replace the first word with another word
  $words="that new trainee is so genias";
  echo str_replace("that","our",$words);
  echo "<br>";
  
  //9 find the first character that is different betwwen two string
  $string1="dragonball";
  $string2="dragonboll";
  $diffrent=strspn($string1 ^ $string2 , "\0");
  echo "the difference between two string at position $diffrent";
  echo "<br>";
  


  //10 put a string in an array
  $string_array = "Twinke ,twinke , little star";
  print_r ( explode( ',', $string_array ) );
  echo "<br>";


  
  //11 print the next letter of the inputted letter
 

  $str = 'a';
  echo ++$str; // prints 'b'
  echo "<br>";


  $str1 = 'z';
  echo ++$str1; // prints 'aa'
  echo "<br>";


  $str1 = '10';
  echo ++$str1; // prints '11'
  echo "<br>";

  //12 insert a string at the specified position in a given string
  $string_insert="The brown fox";
  echo substr_replace($string_insert,"quick ",4 ,0); 
  echo "<br>";



  //13 remove zeroes from the given number
 $number="0000000006571022.24";
  echo str_replace("0","", $number);
  echo "<br>";
 


 //14 remove part of string
  $string_remove = "The quick brown fox jumps over the lazy dog";
  echo str_replace("fox", " ", $string_remove);
  echo "<br>";


  //15 remove tralling dashes from a string

  $dashes = "The quick brown --- fox jumps overthe lazy dog---";
  echo trim($dashes,"Th!");
  echo "<br>";
  echo trim($dashes,"-!");
  echo "<br>";
  // to remove all dashes in every 
  echo str_replace("-", " ", $dashes);
  echo "<br>";


  //16 remove special charcters from a string
  $specail_charcters='\"1+2/3*2:2-3/4*3';
  echo str_replace(["/",'\"',"$","*",":","-","+"],"",$specail_charcters);
  echo "<br>";

  //17 select first 5 words from a string
  $my_string = 'The -quick brown fox jumps over the lazy dog';
  // echo substr($string_select,0, 25);
  echo implode(' ', array_slice(explode(' ', $my_string), 0, 5));
  echo "<br>";
  echo htmlspecialchars($my_string);
  echo "<br>";

  //18 remove comma(s) from a numeric string
  $number_comma = "2,543.12";
  echo str_replace(","," ", $number_comma);
  echo "<br>";

  //19 print letters from "a" to "z"
  $alpha = "a";
  for($i=0;$i<26;$i++){
  echo $alpha++ ."\n";
  }
  
?>