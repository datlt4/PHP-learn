<?php
require "components/header.php";
echo "<h1>Demo Project</h1>";
$name = $email = $body = "";
$name_error = $email_error = $feedback_error = "";
if (isset($_POST["submit_tag"])) {
    // Validate
    if (empty($_POST["name_tag"])) {
        $name_error = "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name_tag"]);
    }
    if (empty($_POST["email_tag"])) {
        $email_error = "Email is required";
    } else {
        $email = filter_var($_POST["email_tag"], FILTER_SANITIZE_EMAIL);
    }
    if (empty($_POST["feedback_tag"])) {
        $feedback_error = "Feedback is required";
    } else {
        $feedback = filter_var($_POST["feedback_tag"], FILTER_SANITIZE_SPECIAL_CHARS);
    }
    $validate_success = !(empty($name) || empty($email) || empty($feedback));
    if ($validate_success) {
        $sql = "INSERT INTO feedback (name, email, body) VALUES (:name, :email, :body)";
        // $sql = "INSERT INTO feedback (name, email, body) VALUES (?,?,?)";
        try {
            $statement = $connection->prepare($sql);
            $statement->bindValue(":name", $name); // $statement->bindParam(1, $name);
            $statement->bindValue(":email", $email); // $statement->bindParam(2, $email);
            $statement->bindValue(":body", $feedback); // $statement->bindParam(3, $body);
            $statement->execute();
            echo "Insert feedback into database successfully<br>";
            header ("Location: feedback_list.php");
        } catch (PDOException $e) {
            echo "Cannot insert feedback into database " . $e->getMessage() . "<br>";
        }
    }
}
?>

<hr>
<h2>Enter your feedback here</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="mb-3">
        <input type="text" class="form-control<?php echo !empty($name_error) ? " is-invalid" : "" ?>" name="name_tag" placeholder="What is your name?" value="<?php echo $name; ?>">
        <p class="text-danger"><?php echo $name_error; ?></p>
    </div>
    <div class="mb-3">
        <input type="email" class="form-control<?php echo !empty($email_error) ? " is-invalid" : ""; ?>" name="email_tag" placeholder="Enter your email" value="<?php echo $email; ?>">
        <p class="text-danger"><?php echo $email_error; ?></p>
    </div>
    <div class="mb-3">
        <textarea type="text" class="form-control<?php echo !empty($feedback_error) ? " is-invalid" : ""; ?>" name="feedback_tag" placeholder="Enter your feedback" row=5 col=2><?php echo $feedback; ?></textarea>
        <p class="text-danger"><?php echo $feedback_error; ?></p>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" name="submit_tag" value="Send">
    </div>
</form>
<?php include "components/footer.php" ?>