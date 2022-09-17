<?php
echo 'Basic Arrays Tasks<br><br>';
echo '-----------Ex1-------------<br>';
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon<br>";
?>

<?php
echo '-----------Ex2-------------<br>';
$cOlors = array('white', 'green', 'red');
sort($cOlors);
echo "<ul>";
foreach ($cOlors as $x) {
    echo "<li>$x</li>";
}
echo "</ul>";
?>
<?php
echo '-----------Ex3-------------<br>';
$cities = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels", "Denmark" => "Copenhagen",
    "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens",
    "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid"
);
foreach ($cities as $country => $capital) {
    echo 'The Capital Of ' . $country . ' Is ' . $capital . '<br>';
}
?>
<?php
echo '-----------Ex4-------------<br>';
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo reset($color) . '<br>';
?>
<?php
echo '-----------Ex5-------------<br>';
$array1 = array('1', '2', '3', '4', '5');
echo 'Original Array : ';
foreach ($array1 as $x) {
    echo "$x ";
}
echo '<br>';
$inserted = '$';
array_splice($array1, 3, 0, $inserted);
echo "The New Array Is : ";
foreach ($array1 as $x) {
    echo "$x ";
}
echo '<br>';
?>
<?php
echo '-----------Ex6-------------<br>';

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
}
?>
<?php
echo '-----------Ex7-------------<br>';

$month_temp = array(
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
    76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73
);

$tot_temp = 0;
$temp_array_length = count($month_temp);
foreach ($month_temp as $temp) {
    $tot_temp += $temp;
}
$avg_high_temp = $tot_temp / $temp_array_length;
echo "Average Temperature is : " . $avg_high_temp . "<br>
";
sort($month_temp);
echo " List of five lowest temperatures :";
for ($i = 0; $i < 5; $i++) {
    echo $month_temp[$i] . ", ";
}
echo '<br>';

echo "List of five highest temperatures :";
for ($i = ($temp_array_length - 5); $i < ($temp_array_length); $i++) {
    echo $month_temp[$i] . ", ";
}
echo '<br>';
?>

<?php
echo '-----------Ex8-------------<br>';
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
print_r(array_merge($array1, $array2));
echo '<br>';

?>
<?php
echo '-----------Ex9-------------<br>';

// Program to change strings in an array to upper case
$input = array("red", "blue", "white", "yellow");

// print array before conversion of string
print "Original Array:<br>";
print_r($input);
echo '<br>';

// Step 1: flip array key => value
$input = array_flip($input);

// Step 2: change case of new keys to upper
$input = array_change_key_case($input, CASE_UPPER);

// Step 3: reverse the flip process to
// regain strings as value
$input = array_flip($input);

// print array after conversion of string
print "Converted Array:<br>";
print_r($input);
echo '<br>';
?>

<?php
echo '-----------Ex10-------------<br>';
// Program to change strings in an array to upper case
$input = array("RED", "BLUE", "WHITE", "YELLOW");

// print array before conversion of string
print "Original Array:<br>";
print_r($input);
echo '<br>';

// Step 1: flip array key => value
$input = array_flip($input);

// Step 2: change case of new keys to upper
$input = array_change_key_case($input, CASE_LOWER);

// Step 3: reverse the flip process to
// regain strings as value
$input = array_flip($input);

// print array after conversion of string
print "Converted Array:<br>";
print_r($input);
echo '<br>';
?>

<?php
echo '-----------Ex11-------------<br>';
echo implode(",", range(200, 250, 4)) . "<br>";
?>
<?php

echo '-----------Ex12-------------<br>';
$my_array = array("abcd", "abc", "de", "hjjj", "g", "wer");
$new_array = array_map('strlen', $my_array);

echo "The shortest array length is " . min($new_array) .
    ".<br> The longest array length is " . max($new_array) . '.<br>';


?>


<?php
echo '-----------Ex13-------------<br>';
$n = range(11, 20);
shuffle($n);
for ($x = 0; $x < 10; $x++) {
    echo $n[$x] . ' ';
}
echo '<br>';
?>

<?php
echo '-----------Ex14-------------<br>';

function minNotZero(array $values)
{
    return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(minNotZero(array(0, 1, 12, 3, 5)) . "<br>");

echo "----------That's All-----------<br>"
?>

<?php
$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$result = $array1 + $array2;
var_dump($result);
?>
