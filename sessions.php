<?php
// echo "Sessions in PHP<br>";
// /*
//  session are stored in the server
//  so it can be used across multiple pages     
//  */
// session_start();
// if(isset($_POST['submit'])) {
//     $email = filter_input(INPUT_POST, 'email', 
//                 FILTER_SANITIZE_SPECIAL_CHARS);
//     $password = $_POST['password'];
//     if($email == 'hoang@gmail.com' 
//         && $password == '123456') {
//         $_SESSION['email'] = $email;    
//         //redirect to another page
//         header('Location: ./dashboard.php');
//     } else {
//         echo "Incorrect email/password";
//     }
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
    <h1>Login to your account</h1>
<form 
        action="<?php echo
                htmlspecialchars($_SERVER['PHP_SELF']); ?>"
        method="POST"
        >
        <h3>Login to your account</h3>
        <div>
            <label for="name">Email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html> -->

<?php
if (isset($_POST["submit_tag"])) {
    session_start();
    print_r($_POST);

    $_SESSION["email"] = filter_var($_POST["email_tag"], FILTER_SANITIZE_SPECIAL_CHARS);
    // $email = htmlspecialchars($_POST["email_tag"]);
    $_SESSION["password"] = $_POST["password_tag"] ?? "";
    if (!empty($_POST["name_tag"]))
        $_SESSION["name"] = htmlspecialchars($_POST["name_tag"] ?? "");
    print_r($_SESSION);
    if ($_SESSION["email"] == "trangdang@gmail.com" && $_SESSION["password"] == "123456") {
        // redirect to another page
        header("Location: dashboard.php");
    } else {
        echo "Incorrect email/password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đặng | learn Session in PHP</title>
</head>

<body>
    <h1>Login to your account</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
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