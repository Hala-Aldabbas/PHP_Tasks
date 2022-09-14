<?php
//Task 1
echo "<h3> Loops Task 1 </h3>";
 for($i=1; $i<=10; $i++)
{
 if($i< 10)
 {
 echo "$i-";
 }
 else
  {
 echo "$i"."\n";
  }
}
echo "<br>";
//Task 2
echo "<br>";echo "<h3> Loops Task 2 </h3>";
$sum=0;
        for($i=0; $i<=30; $i++)
{
        $sum+=$i;
}
echo $sum;
echo "<br>";

//Task 3  

echo "<br>";echo "<h3> Loops Task 3 </h3>";
$counter=0;
for($letter=65;$letter <= 69;$letter++){
    for($i=1;$i<=5;$i++){
        if($i >= 5-$counter){
            echo chr($letter)." ";
        }
        else{
            echo "A "; 
        }
    }
    $counter++;
    echo "<br>";
}

//Task 4
echo "<br>";echo "<h3> Loops Task 4 </h3>";
$counter=0;
for($number=1;$number <= 5;$number++){
    for($i=1;$i<=5;$i++){
        if($i >= 5-$counter){
            echo $number."  ";
        }
        else{
            echo "1  ";
        }
    }
    $counter++;
    echo "<br>";
}

//Task 5
echo "<br>";echo "<h3> Loops Task 5 </h3>";
$counter2=1;
for($number=1;$number <= 5;$number++){
    for($i=1;$i<=5;$i++){
        if($i == $counter2){
            echo $number."  ";
        }
        else{
            echo "0  ";
        }
    }
    $counter2++;
    echo "<br>";
}

//Task 6
echo "<br>";echo "<h3> Loops Task 6 </h3>";
function calculate_factorial($number){
    $factorial=1;
    $factorial_temp=1;
    for($i=1;$i < $number;$i++){
        $factorial_temp=$factorial_temp*$i;
    }
    $factorial=$factorial_temp*$number;
    return "The Factorial of $number = $factorial";
}
echo calculate_factorial(5);


//Task 7
echo "<br>";echo "<h3> Loops Task 7 </h3>";

$number1=0;
$number2=1;
$result=0;
echo "0 ";
while($result <=100){
    $result=$number1+$number2;
    echo $result." ";
    $number1=$number2;
    $number2=$result;
}


//Task 8
echo "<br>";echo "<h3> Loops Task 8 </h3>";
$str="orange coding academy";
$counter3=0;
for($i=0;$i < strlen($str);$i++){
    if($str[$i] == "c"){
        $counter3++;
    }
}echo "there are ($counter3) c characters in the string";


//Task 9
echo "<br>";echo "<h3> Loops Task 9 </h3>";
echo "<table border='1' cellpadding='3' cellspacing='0'>";
    for($number1=1;$number1 <= 5;$number1++){
        echo"<tr>";
        for($number2=1;$number2 <= 6;$number2++){
            $result=$number1*$number2;
            echo "<td> $number1 * $number2 = $result </td>";
        }
        echo "</tr>";
    }
echo "</table>";


//Task 10
echo "<br>";echo "<h3> Loops Task 10 </h3>";
for($i=1; $i <= 50;$i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo " FizzBuzz ";
    }
    elseif($i % 5 == 0){
        echo " Buzz ";
    }
    elseif($i % 3 == 0){
        echo " Fizz ";
    }else{
        echo $i ." ";
    }
}

//Task 11
echo "<br>";echo "<h3> Loops Task 11 </h3>";
function floyed_triangle($n){
    $number3=1;
    for($i=1;$i <= $n ;$i++){
        for($a=1;$a <= $i; $a++){
            echo $number3." ";
            $number3++;
        }
        echo "<br>";
    }
}
floyed_triangle(5);

//Task 12
echo "<br>";echo "<h3> Loops Task 12 </h3>";

for($i=0;$i<=4;$i++){
    for($j=4;$j>=$i;$j--){
        echo '&nbsp;';
    }
    for($k=0;$k<=$i;$k++){
        echo 'A';
    }
    echo '<br />';
}
for($i=0;$i<=3;$i++){
    for($k=0;$k<=$i+1;$k++){
        echo '&nbsp;';
    }
    for($j=3;$j>=$i;$j--){
        echo 'A';
    }
    echo '<br />';
} 



?>
