<?php

//Q1 
function Prime($n)
{
    if($n ==1)
        {
            return "$n is not a prime number ";
        }
 for($i=2; $i<$n; $i++)
   {
        if($n %$i ==0)
        {
            return "$n is not a prime number ";
        }
    }
        return "$n is a prime number ";
   }
echo Prime(6);
echo "<br>";

// Q2
function reverse($string){
  return strrev($string);
}
echo reverse("remove");
echo "<br>";

//Q3

function lower($string){
  if($string === strtolower($string)){
    return "Your String is Ok ";
}
else{
    return "Your String is not in lower case";
}
}
echo Lower("remove");
echo "<br>";
echo Lower("ReMove");
echo "<br>";

// Q4 Q5

function swap($x , $y){
  $temp = $x;
  $x = $y;
  $y = $temp;
  return " x = $x , y = $y";
}
echo swap(12 , 10);
echo "<br>";

// Q6
function Armstrong($num){
  $sum=0;
  $x=$num;
  while($x !=0 ){
      $rem = $x % 10; 
      $sum = $sum + $rem*$rem*$rem; 
      $x = $x /10;
  }
  if ($num == $sum){
  return 'Yes! It is an Armstrong';
}else{
  return 'No! It is not an Armstrong';}

}
echo Armstrong(407);
echo "<br>";
echo Armstrong(370);
echo "<br>";
// Q7

function palindrome($string){
  if ($string == strrev($string)){
  echo 'Yes it is a palindrome';}
  else{
    echo 'it is not a palindrome';
  }
}palindrome('Eva, can I see bees in a cave'); echo "<br>";
palindrome('mam');
echo "<br>";

//Q8
function duplicates($arr)
{
    print_r(array_unique($arr));
}
$arr=array(2, 4, 7, 4, 8, 4);
duplicates($arr);
echo "<br>";
?>

<!-- logical  Statement -->
<?php
// Q1
function leapYears($year){
    if($year % 4 === 0){
        echo "This year is a leap year" ;
    }
    else{
        echo "This year is not a leap year";
    }
}
leapYears(2013);
echo "<br>";
// Q2

function season($temp){
  if ($temp < 20){
    echo "We are in Winter";
  }else{
    echo "It is Summertime!";
  }
} season( 25);
echo "<br>";
season( 12);
echo "<br>"; 

//Q3 
function integers( $num1 ,$num2){
  if ($num1 == $num2){
    echo ($num1 +$num2) *3;
  }
} integers(4,4);
echo "<br>"; 
//Q4
 function strings($num1 ,$num2){
  $sum = $num1 +$num2;
  if ($sum == 30){
    echo $sum ;
  }else {
    echo "false";
  }
 } strings(20 ,10);
 echo "<br>"; 
 strings(10 ,10);
 echo "<br>"; 

 //Q5

 function multiple($num){
  if ($num % 3 ==0 ){
    echo "true";
  }else{
echo "false";
  }
 } multiple(20);
 echo "<br>"; 
 multiple(21);
 echo "<br>"; 

 //Q6
 function rangeCheck($num){
  if($num <= 50 && $num >= 20){
      echo  $num ;
  }
  else{
      echo "False the number is not in range";
  }
}rangeCheck(40); echo "<br>"; 
rangeCheck(55); echo "<br>"; 

//Q7
function largestNumber($num1, $num2, $num3){
  $arr = [$num1,$num2,$num3];
 echo max($arr) ;
}largestNumber(1,5,9); echo "<br>"; 
largestNumber(14,50,.9); echo "<br>"; 

//Q8

function electricBill($data){
  if ($data > 0 && $data <= 50){
    echo  "Your bill is: " . $data * 2.5 ."JOD";
  }
  elseif($data > 50 && $data <= 150){
    echo  "Your bill is: " . 50 * 2.5 + ($data - 50) * 5 . "JOD";
  }
  elseif($data > 150 && $data <= 250){
    echo "Your bill is: " . 50 * 2.5 + 100 * 5 + ($data - 150) * 6.2 . "JOD";
  }
  elseif($data > 250){
    echo  "Your bill is: " . 50 * 2.5 + 100 * 5 + 100 * 6.2 + ($data - 250) * 7.5 . "JOD";
  }
  
} electricBill(450); echo "<br>"; 
electricBill(250); echo "<br>"; 

//Q9
function calculator($num1 , $num2 ,$sign){
  if ($sign == "+"){
    echo $num1 + $num2;
  }elseif($sign == "-"){
    echo $num1 - $num2;
  }elseif($sign == "*"){
    echo $num1 * $num2;
  }elseif ($sign == "/"){
    echo $num1 / $num2;
  }
}
calculator (30,5,"+"); echo "<br>"; 
calculator (30,5,"-"); echo "<br>"; 
calculator (30,5,"*"); echo "<br>"; 
calculator (30,5,"/"); echo "<br>"; 

//Q10
function checkAge($age){
  if($age>=18){
      echo "You are eligible to vote ";
  }
  else{
      echo " You're illeligible to vote ";
  }
} checkAge(15); echo "<br>"; 

//Q11

function NumberSign($num){
  if($num < 0){
    echo"Negative ";
  }
  elseif($num == 0){
    echo" Zero ";
  }
  else{
    echo " Positive";
  }
} NumberSign("-60"); echo "<br>";
NumberSign("60"); echo "<br>";
NumberSign("0"); echo "<br>";

//Q12
function avarage($arr){
  $sum = 0;
  foreach($arr as $newarr){
    $sum += $newarr;
}
$sum /= count($arr);
if ($sum <= 60){
  echo "F";
}elseif($sum <= 70){
  echo "D";
}elseif($sum <= 80){
  echo "C";
}elseif($sum <= 90){
  echo "B";
}elseif($sum <= 100){
  echo "A";
}

}avarage ([60,86,95,63,55,74,79,62,50]); echo "<br>";
avarage ([60,86,95,63,55,74,79,62,100]); echo "<br>";
avarage ([60,86,95,93,95,74,79,62,100]); echo "<br>";

?>