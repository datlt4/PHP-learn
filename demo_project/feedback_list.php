<?php
require "components/header.php";
echo "<h1>List of feedbacks here</h1>";
$sql = "SELECT name, email, body FROM feedback";
$statement = $connection->prepare($sql);
if ($connection != NULL)
    try {
        $statement->execute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        $feedbacks = $statement->fetchAll();
        echo "<ul class='list_group'>";
        foreach ($feedbacks as $fb) {
            $name = $fb["name"] ?? "";
            $email = $fb["email"] ?? "";
            $body = $fb["body"] ?? "";
            echo "<li class='list_group_item'>";
            echo "<p>$name</p>";
            echo "<p>$email</p>";
            echo "<p>$body</p>";
            echo "</li>";
        }
        echo "</ul>";
    } catch (PDOException $e) {
        echo "Cannot query database. Error: ".$e->getMessage();
    }
include "components/footer.php";
