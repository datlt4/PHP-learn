<?php
// echo "Exceptions in PHP";
// function divide($a, $b) {
//     if(!$b) {
//         throw new Exception("Cannot divide by zero");
//     }
//     return $a / $b;
// }
// //echo divide(5, 0);
// try {
//     echo divide(10, 2);
//     //echo divide(5, 0);
//     echo "no errors";
// }catch(Exception $e) {
//     echo "Caught exception: " . $e->getMessage() . "\n";
// } finally {
//     echo "Finally come here...";
// }
// echo "Program runs here..";
?>

<?php
echo "<h1>Exception in PHP</h1>";
function divide($a, $b)
{
    if (!$b) {
        printf(__LINE__ . "<br>");
        throw new Exception("Cannot divide by zero");
    } else {
        printf(__LINE__ . "<br>");
    }
    return $a / $b;
}

try {
    divide(10, 5);
    $i = 10 / 0;
    divide(1, 0);
} catch (DivisionByZeroError $e) {
    echo "Caught exception: [ " . __LINE__ . " ]\t" . $e->getMessage() . "<br>";
} catch (Exception $e) {

    echo "Caught exception: [ " . __LINE__ . " ]\t" . $e->getMessage() . "<br>";
} finally {
    echo "Finally message<br>";
}
echo "Program runs here...";
?>