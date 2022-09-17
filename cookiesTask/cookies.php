<?php
echo "<br>";
echo "<br>----------_Task 5_-------------<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];

?>
    <?php
    echo "<br>----------_Task 6_-------------<br>";
    echo "<br>";
    $start_time = microtime(TRUE);

    $end_time = microtime(TRUE);
    $time_taken = ($end_time - $start_time) * 1000;
    $time_taken = round($time_taken, 5);
    echo 'Page generated in ' . $time_taken . ' seconds.';
    ?>
    <?php
    echo "<br>----------_Task 7_-------------<br>";

    echo "<br>";
    session_start();
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    } else {
        $_SESSION['count']++;
    }
    echo $_SESSION['count'];
    ?>
<?php
echo "<br>----------_Task 8_-------------<br>";

setcookie("My-To-Do-List", "Task", time() + 86400, "/index.php", "localhost", TRUE, FALSE);

echo "<br>";
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>

<?php
// if (isset($_SERVER['HTTP_COOKIE'])) {
//     $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
//     foreach($cookies as $cookie) {
//         $parts = explode('=', $cookie);
//         $name = trim($parts[0]);
//         setcookie($name, '', time()-1000);
//         setcookie($name, '', time()-1000, '/');
//     }
// }
?>
<!DOCTYPE html>
<?php
	setcookie("Auction_Item", "Luxury Car", time() + 2 * 24 * 60 * 60,);
    setcookie("My-To-Do-List", "Task", time() + 86400, "/", "localhost", TRUE, FALSE);
?>
<html>
<body>



</body>
</html>
<?php
echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";

?>