

<?php
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