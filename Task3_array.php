<?php
//Task 1
echo "Array Task 1";
 $color = array('white', 'green', 'red', 'blue', 'black');
 echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

 echo "<br>";
 //Task 2
 echo "Array Task 2";
 $colors = array('white', 'green', 'red') ;
 echo "<ul>";
 foreach ($colors as $color) {
     echo "<li>$color</li>";
 }
 echo "</ul>";
 echo "<br>";

 //Task 3
 echo "Array Task 3";
 echo "<br>";
 $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
 asort($cities);
foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital." . "<br>";
}

//Task 4
 echo "<br>";
echo "Array Task 4";
echo "<br>";
$color1 = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color1[4];

//Task 5
 echo "<br>";echo "Array Task 5"; echo "<br>";
 $arr = array(1, 2, 3, 4, 5);
 $val = "$";
 $pos = 3 ;
 array_splice($arr, $pos, 0, $val);
 print_r($arr);

 //Task 6
 echo "<br>";echo "Array Task 6"; echo "<br>";
 $fruits=array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $value) {
    echo $key . "= " . $value . "<br>";
}
//Task 7
echo "<br>";echo "Array Task 7"; echo "<br>";
$temp= array(70, 65, 80, 56, 57, 63, 64, 85, 66, 90, 86 ,78, 63, 82, 58, 52, 69, 65, 80, 60, 92, 87 );

$average = array_sum($temp) / count($temp);
sort ($temp);
echo "The average temperature is $average" . "<br>";
echo "The five lowest temperature are: " .implode("," , array_slice($temp, 0 , 7));

echo "<br>";
echo "The five highest temperature are: ".implode("," , array_slice($temp, -7 , 7));


//Task 8
echo "<br>";echo "Array Task 8"; echo "<br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

//task 9
echo "<br>";echo "Array Task 9"; echo "<br>";
$colors = array("red","blue", "white","yellow");
 function convert_to_uppercase($colors)
{
    return array_map('strtoupper', $colors);
}
echo "<pre>";
print_r(convert_to_uppercase($colors));

// task 10
echo "<br>";echo "Array Task 10"; 
$colors = array("RED","BLUE", "WHITE","YELLOW");
function convert_to_lower($colors)
{
    return array_map('strtolower', $colors);
}
echo "<pre>";
print_r(convert_to_lower($colors));
echo "<br>"; 
// task 11
echo "<br>";echo "Array Task 11"; 
echo "<br>";
        $num= 4;     
        $min = 200;    
        $max = 250;    
        $divisible = array();
        $p = 0;
        
        echo "Numbers divisible by $num : ";
        for ($i=$min; $i <= $max; $i++) { 
            if ($i%$num == 0){
                $divisible[$p] = $i;
                echo "$divisible[$p], ";
                $p++;
            }
        }
      
echo "<br>";
// task 12
echo "<br>";echo "Array Task 12"; echo "<br>";
$arr = array("abcd","abc","de","hjjj","g","wer");
$new_arr = array_map('strlen', $arr);
echo "The shortest array length is " . min($new_arr) .
". The longest array length is " . max($new_arr).'.';
echo "<br>";

echo "<br>";echo "<h3> Loops Task 12 </h3>";
$array = array("abcd","abc","de","hjjj","g","wer");

$Length = 4;
$longest = [];

foreach ($array as $value) {
    $currentLength = strlen($value);
    if ($currentLength > $Length) {
        $longest = [$value];
        $Length = $currentLength;
    } elseif ($currentLength == $Length) {
        $longest[] = $value;
    }
}echo "The longest : ";
var_export($longest);
echo "<br>";
$Length = 4;
$shortest = [];
foreach ($array as $value) {
    $currentLength = strlen($value);
    if ($currentLength < $Length) {
        $shortest = [$value];
        $Length = $currentLength;
    } elseif ($currentLength == $Length) {
        $longest[] = $value;
    }
}echo "The shortest : ";
var_export($shortest);
echo "<br>";
// task 13
echo "<br>";echo "Array Task 13"; echo "<br>";
$arr=range(11,20);
shuffle($arr);
for ($i=0; $i< 10; $i++)
{
echo $arr[$i].' ';
}

// task 14
echo "<br>";echo "Array Task 14"; echo "<br>";
?>
