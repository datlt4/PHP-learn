<?php
echo "Superglobals in PHP<br>";
// print_r($_SERVER);
print_r($_GET);
//print_r($_POST);
//We will send data through url or form using $_GET / $_POST
// print_r(array_keys($_GET));

// if (isset($_GET["age"]))
// // if (in_array("age", array_keys($_GET)))
//     echo $_GET["age"];
// else
//     echo "no age<br>";

// if (isset($_GET["name"]))
// // if (in_array("name", array_keys($_GET)))
//     echo $_GET["name"];
// else
//     echo "no name<br>";

print_r($_POST);
$name = htmlspecialchars($_POST["name_tag"] ?? "~"); // coalescing
$email = filter_var($_POST["email_tag"] ?? "~", FILTER_SANITIZE_EMAIL); // coalescing
$age = htmlspecialchars($_POST["age_tag"] ?? "~"); // coalescing
$password = htmlspecialchars($_POST["password_tag"] ?? "~"); // coalescing
echo "name: $name<br>";
echo "email: $email<br>";
echo "age: $age<br>";
echo "password: $password<br>";

//<script>alert('This is javascript code');</script>
//$email = htmlspecialchars($_POST['email']) ?? '';//coalescing   
//another way
// $email = filter_var($_POST['email'], 
//     FILTER_SANITIZE_SPECIAL_CHARS); 
// $password = htmlspecialchars($_POST['password']) ?? '';
// echo $email;
// echo $password;
//send this to Database,etc..
//We will talk about MySQL Database later
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đặng | PHP Learn</title>
</head>

<body>
    
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
        <div>
            <label for="name_tag">Your name:</label>
            <input type="text" name="name_tag">
        </div>
        <div>
            <label for="email_tag">Your email:</label>
            <input type="text" name="email_tag">
        </div>
        <div>
            <label for="age_tag">Age:</label>
            <input type="text" name="age_tag">
        </div>
        <div>
            <label for="password_tag">Password:</label>
            <input type="password" name="password_tag">
        </div>
        <input type="submit" value="Login" name="submit_tag">
    </form>
</body>

</html>