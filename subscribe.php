<?php

require_once('./models/connect_db.php');

if (isset($_POST['subscriber'])) {
    $subscriber = $_POST['subscriber'];
}

$message =  '<h1 class="text-light bg-shagayu rounded m-2">Successfully' . $subscriber . '</h1>';



// Insert subscriber email into the "subscription" table
$sql = "INSERT INTO subscription (subscriber) VALUES ('$subscriber')";

if (mysqli_query($conn, $sql)) {
    $_SESSION['message'] = "New record created successfully";
    header('Location: index.php');
    exit;
} else {
    $_SESSION['message'] = "Failed to insert";
    header('Location: index.php');
    exit;
}
