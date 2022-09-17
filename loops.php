<?php
echo '-----Loops Tasks-----<br><br>';
echo '-----------Ex1-------------<br>';

for ($x = 1; $x <= 10; $x++) {
    if ($x < 10) {
        echo "$x-";
    } else {
        echo "$x" . "<br>";
    }
}
?>

<?php
echo '-----------Ex2-------------<br>';
$sum = 0;
for ($x = 1; $x <= 30; $x++) {
    $sum += $x;
}
echo "The sum of the numbers 0 to 30 is $sum" . "<br>";
?>
<?php
echo '-----------Ex3-------------<br>';
function print_pattern($num){
    for ($i=0; $i<$num; $i++){
        for ($k=$num; $k> $i+1; $k--){
          echo "A"." ";
        }
        $array3=["A","B","C","D","E"];
        for ($j=0; $j<=$i; $j++){
            echo $array3[$i]." ";
          }
          echo "<br>";
    }
}
$num =5;
print_pattern($num);
?>
<?php
echo '-----------Ex4-------------<br>';
function print_pattern2($num){
    for ($i=0; $i<$num; $i++){
        for ($k=$num; $k> $i+1; $k--){
          echo "1"." ";
        }
        $array3=["1","2","3","4","5"];
        for ($j=0; $j<=$i; $j++){
            echo $array3[$i]." ";
          }
          echo "<br>";
    }
}
$num =5;
print_pattern2($num);
?>
<?php
echo '-----------Ex5-------------<br>';
function print_pattern3($num){
    for ($i=0; $i<$num; $i++){
        for ($k=$num; $k> $i+1; $k--){
          echo "1"." ";
        }
        $array3=["1","2","3","4","5"];
        for ($j=0; $j<=$i; $j++){
            echo $array3[$i]." ";
          }
          echo "<br>";
    }
}
$num =5;
print_pattern3($num);
?>

<?php
echo '-----------Ex6-------------<br>';

$n = 5;
$x = 1;
for($i=1;$i<=$n;$i++)
{
 $x*= $i; 
}
echo "The Factorial Of "." $n = $x "."<br>";
?>
<?php
echo '-----------Ex7-------------<br>';


?>
<?php
echo '-----------Ex8-------------<br>';

$text="Orange coding c academy";
$search_char="c";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo 'The Letter "c" Is Repeated '. $count.' Times'."<br>";
?>

<?php
echo '-----------Ex9-------------<br>';


?>
<!-- <!DOCTYPE html> -->
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
 

  }
?>
</table>
</body>
</html>

<?php
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '-----------Ex10-------------<br>';

for ($i = 1; $i <= 50; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . " FizzBuzz"."<br>" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo $i. " Fizz"."<br>";
   }
     else if ( $i%5 == 0 ) 
   {
     echo $i. " Buzz"."<br>";
   }
     else
   {
     echo $i."<br>";
   }
 }
?>
<?php
echo '-----------Ex11-------------<br>';

$n = 5; 
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
	echo "<br>";
   }
?>
<?php
echo '-----------Ex12-------------<br>';
function drawDiamond($a) {
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $count= 0;
    echo "<pre>";
    for ($i= 1;$i<=($a/2);$i++) {
      for ($s=($a/2); $s>=$i; $s--) {
       print(" ");
      }
      for ($j= 1; $j<(2*$i); $j++) {
       print("$str[$count]");
      }
      $count++;
      print ("<br>");
     }
    for ($p=1;$p<=$a+1;$p++) {
     print("$str[$count]");
    }
    print("<br>");
    $h=1;
    for ($d=1;$d<=($a/2);$d++) {
     for ($e=1;$e<=$d;$e++) {
      print(" ");
     }
     $count--;
     for ($f=($a-$h);$f>=1;$f--) {
      print("$str[$count]");
     }
     $h=$h+2;
     print("<br>");
    }
    echo "</pre>";
   }
   drawDiamond(8)
?>
<?php
$texts = array("tt","ttt","tttt","ttttt","ttttttt","tttttttt",);
$max = strlen($texts[0]);
$min = strlen($texts[0]);


$x = strlen($texts[0]);
foreach ($variable as $key => $value) {
  # code...
}
?>