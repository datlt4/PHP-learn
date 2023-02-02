<?php
// session_start();
// if(isset($_SESSION['email'])) {
//     echo "Welcome to Dashboard page<br>";
//     echo "email: " . $_SESSION['email'];
//     echo "<a href='/logout.php'>Logout</a>";
// } else {   
//     echo "Welcome guest to Dashboard";
//     echo "<a href='/sessions.php'>Back to Login</a>";
// }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is dashboard</h1>
</body>
</html> -->


<?php
session_start();
if (isset($_SESSION["name"])) {
    echo "Welcome to Dashboard page<br>";
    echo "Hello: " . $_SESSION["name"] . "<br>";
    echo "<a href='/logout.php'>Logout</a><br>";
} else {
    echo "Welcome guest to Dashboard page<br>";
    echo '<a href="sessions.php">Back to Login</a><br>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    This is dashboard<br>
</body>

</html>