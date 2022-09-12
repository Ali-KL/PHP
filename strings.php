<!-- Exercize 1 -->

<?php
// phpinfo();
$txt = "Hello world!";
$capitalized = strtoupper($txt);
echo $capitalized;
?>
<br>
<?php
$txt2 = "HELLO WORLD!";
$capitalized = strtolower($txt2);
echo $capitalized;
?>
<br>
<?php
$txt = "hello world!";
$capitalized = ucfirst($txt);
echo $capitalized;
?>
<br>
<?php
$txt = "hello world!";
$capitalized = ucwords($txt);
echo $capitalized;
?>
<!-- Exercize 2 -->
<br>
<?php
$num = '085119';
echo date("H:i:s", (strtotime($num)));
?>
<!-- Exercize 3 -->
<br>
<?php
$text = "I Am A Full Stack Developer At Orange Coding Academy";
$word = "Stack";
if (strpos($text, $word) !== false) {
    echo 'Word Found!!';
} else {
    echo 'Not Found!!';
}
?>
<!-- Exercize 4 -->
<br>
<?php
echo basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
?>
<!-- Exercize 5 -->
<br>
<?php
$email = 'info@orange.com';

$username = strstr($email, '@', true);

echo $username ;
?>
<!-- Exercize 6 -->
<br>
<?php
$str1 = 'info@orange.com';
echo substr($str1, -3);
?>
<!-- Exercize 7 -->
<br>
<?php
function password_generate($chars) 
{
  $text = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($text), 0, $chars);
}
  echo password_generate(10);

?>
<!-- Exercize 8 -->
<br>
<?php
$text = 'that new trainee is genius.';
echo preg_replace('/that/', 'our', $text); 
?>
<!-- Exercize 9 -->
<br>
<?php
$str1 = 'dragonball';
$str2 = 'dragonboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('The First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);

?>
<!-- Exercize 10 -->
<br>
<?php
$a=array("Twinkle","twinkle","little star");
array_push($a,"twinkle",);
print_r($a);
?>
<!-- Exercize 11 -->
<br>
<?php
$cha = 'Z';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha; 
?>
<!-- Exercize 12 -->
<br>
<?php
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string;
?>
<!-- Exercize 13 -->
<br>
<?php
$s = 'The quick brown fox';
$arr1 = explode(' ',trim($s));
echo $arr1[0];
?>
<!-- Exercize 14 -->
<br>
<?php
$x = '0000657022.24';
$str1 = ltrim($x, '0');
echo $str1;
?>
<!-- Exercize 15 -->
<br>
<?php
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str);
?>
<!-- Exercize 16 -->
<br>
<?php

$string="I Am A Full Stack Developer At Orange Coding Academy----";
$test = str_replace("-", " ", $string);
echo $test;
?>
<!-- Exercize 17 -->
<br>
<?php
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str);
?>
<!-- Exercize 18-->
<br>
<?php
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5));
?>

<!-- Exercize 19 -->
<br>
<?php
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x;
  }
?>
<!-- Exercize 20 -->
<br>
<?php
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 
?>


<!-- Exercize Bonus -->

<br>
<?php
$text = "the*?quick#brown?fox!jumps#over;the*lazy+dog";
$reg = ["#", "'", ";" ,'/' , '\'' , ':' , '+','*','?','!'];
$res = str_replace($reg, ' ', $text );
echo implode(' ', array_slice(explode(' ', $res), 0, 6));
echo '<br>';
?>



