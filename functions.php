
<?php

echo 'Tasks On Functions';
echo '<br>';
echo '-------------------------<br>';
function familyName($fname, $year)
{
    echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
echo '-------------------------<br>';
$a = 32;
echo var_dump($a) . "<br>";

$b = "Hello world!";
echo var_dump($b) . "<br>";

$c = 32.5;
echo var_dump($c) . "<br>";

$d = array("red", "green", "blue");
echo var_dump($d) . "<br>";

$e = array(32, "Hello world!", 32.5, array("red", "green", "blue"));
echo var_dump($e) . "<br>";

// Dump two variables
echo var_dump($a, $b) . "<br>";

echo '-------------------------<br>';

function add1($x)
{
    return $x + 1;
}

echo "5 + 1 is " . add1(5);
echo '<br>-------------------------<br>';

echo '<br>Functions';

echo '<br>-----------Ex1--------------<br>';

function check_prime($num)
{
    if ($num == 1)
        return 0;
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0)
            return 0;
    }
    return 1;
}
$num = 4;
$flag_val = check_prime($num);
if ($flag_val == 1)
    echo "It is a prime number";
else
    echo "It is a non-prime number"

?>
<?php
echo '<br>';
echo '--------------Ex2----------------<br>';
function reverse_string($str1)
{
 $n = strlen($str1);
 if($n == 1)
   {
    return $str1;
   }
 else
   {
   $n--;
   return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1);
   }
}
print_r(reverse_string('Remove')."\n");?>  

<?php
echo '<br>';
echo '--------------Ex3----------------<br>';

function is_str_lowercase($str1)
   {
    for ($sc = 0; $sc < strlen($str1); $sc++) {
	      if (ord($str1[$sc]) >= ord('A') &&
          ord($str1[$sc]) <= ord('Z')) {
      return false;
         }
         }
      return true;
       }
var_dump(is_str_lowercase('Ali'));
echo '<br>';
var_dump(is_str_lowercase('ali'));
?>  

<?php
echo '<br>--------------Ex4----------------<br>';
$a = 20;
$b = 5;
 
// Swap Logic


echo "Number a =".$a." and b=".$b;

$temp = $a;
$a = $b;
$b = $temp;
echo '<br>';

echo "Number a =".$a." and b=".$b."";

?>  
<?php
echo '<br>';
echo '--------------Ex5----------------<br>';

?>  
<?php
echo '<br>';
echo '--------------Ex6----------------<br>';

// function to check whether the number is
// armstrong number or not
function armstrongCheck($number){
	$sum = 0;
	$x = $number;
	while($x != 0)
	{
		$rem = $x % 10;
		$sum = $sum + $rem*$rem*$rem;
		$x = $x / 10;
	}
	
	// if true then armstrong number
	if ($number == $sum)
		return 1;
	
	// not an armstrong number
	return 0;
}

//407
$number = 520;
$flag = armstrongCheck($number);
if ($flag == 1)
	echo "Yes";
else
	echo "No"
?>
<?php
echo '<br>';
echo '--------------Ex7----------------<br>';
function Palindrome($MyString) {
    $revString = strrev($MyString);
    if ($revString == $MyString){
      echo $MyString." is a Palindrome string.<br>";
    } else {
      echo $MyString." is not a Palindrome string.<br>";
    }
  }
  
  Palindrome("level");
  Palindrome("rubber");
  Palindrome("racecar");

?>  
<?php
echo '<br>';
echo '--------------Ex8----------------<br>';

function remove_duplicates_list($list1) {
  $nums_unique = array_values(array_unique($list1));
  return $nums_unique ;
}
$nums = array(1,1,2,2,3,4,5,5);
echo var_dump( remove_duplicates_list($nums));
?> 
<?php
echo '<br><br>';
echo 'Logical Statements & Operators';

echo '<br>--------------Ex1----------------<br>';

function year_check($my_year){
    if ($my_year % 400 == 0)
       print("It is a leap year");
    else if ($my_year % 100 == 0)
       print("It is not a leap year");
    else if ($my_year % 4 == 0)
       print("It is a leap year");
    else
       print("It is not a leap year");
 }
 $my_year = 2001;
 year_check($my_year);
?>  
<?php
echo '<br>';
echo '--------------Ex2----------------<br>';
function detectSeason($temp){

    if ($temp < 20) {
        echo 'Its Winter Time';
    }else{
        echo 'Its Summer Time';
    }
}
detectSeason(15)
?>  

<?php
echo '<br>';
echo '--------------Ex3----------------<br>';

function calculate($num1,$num2){

    if($num1 === $num2){
    $sum = $num1 + $num2;
    echo $sum*3;
    }
 else{
    echo 'Wrong Inputs!!';
}
}
calculate(6,2)
?>

<?php
echo '<br>';
echo '--------------Ex4----------------<br>';
function calculate2($num1,$num2){
    $sum = $num1 + $num2;
    if($sum === 30){
    echo $sum ;
    }
 else{
    echo 'Wrong';
}
}
calculate2(2,10)
?>  

<?php
echo '<br>';
echo '--------------Ex5----------------<br>';

$num = 7;
if($num>0 && $num%3==0){
    echo "the number is positive and multiple of 3";
  }else{
    echo "Wrong number";

  }

?>  
<?php
echo '<br>';
echo '--------------Ex6----------------<br>';

$num = 25;
if ($num >= 20 && $num <= 50) {
echo $num.' is true';
}else{
    echo 'wrong number intered';
}
?>  

<?php
echo '<br>';
echo '--------------Ex7----------------<br>';
$nums = [3,7,15,20];
echo (max($nums). "<br>");
?>  
<?php
echo '<br>';
echo '--------------Ex8----------------<br>';
function electricity($units){
    if ($units == 0 ) {
        echo 'bill is: 0';
    }elseif($units > 0 && $units < 50){
        echo 'Total Bill Is: '.($units*2.5).'JDs';
    }elseif($units > 50 && $units < 150){
        echo 'Total Bill Is: '.($units*5).'JDs';
    }elseif($units > 150 && $units < 250){
        echo 'Total Bill Is: '.($units*6.2).'JDs';
    }elseif($units > 250){
        echo 'Total Bill Is: '.($units*7.5).'JDs';
    }
}
electricity(20)

?>  
<?php
echo '<br>';
echo '--------------Ex9----------------<br>';

function calculator($first_num,$operator,$second_num){
$result = "";
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "+":
           $result = $first_num + $second_num;
            break;
        case "-":
           $result = $first_num - $second_num;
            break;
        case "*":
            $result = $first_num * $second_num;
            break;
        case "/":
            $result = $first_num / $second_num;
    }
    echo $result;
}
}
calculator(8,"/",2)
 
?>  
<?php
echo '<br>';
echo '--------------Ex10----------------<br>';

function voteEligibility($age)
{
   if ($age >= 18) {
    echo 'You Can Vote';
   }else{
    echo 'You Are Not Eligible To Vote';
   }
}
voteEligibility(23)
?>  

<?php
echo '<br>';
echo '--------------Ex11----------------<br>';

function checkNums($number){
    if ($number<0) {
        echo $number.' Is Negative';
    }elseif ($number === 0) {
        echo $number.' Is Neutral';
    }else{
        echo $number.' Is Positive';
    }
}
checkNums(5)
?>  
<?php
echo '<br>';
echo '--------------Ex12----------------<br>';

function studentGrade(){
$marks = array (82,65,80,79,60,85,92,65,90);
$marksSum = array_sum($marks);
$marksCount = count($marks);
$average = $marksSum/$marksCount;
echo 'Your Average Is '.$average.'<br>';

if ($average<60) {
echo 'Your Grade Is F';
}elseif ($average>=60 && $average<70) {
echo 'Your Grade Is D';
}elseif ($average>=70 && $average<80) {
echo 'Your Grade Is C';
}elseif ($average>=80 && $average<90) {
echo 'Your Grade Is B';
}else {
echo 'Your Grade Is A';
}
}
studentGrade()
?>  