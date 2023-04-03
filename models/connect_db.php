<?php function openCon()
{
    $dbhost = 'localhost';
    $dbuser = 'shagayu_datauser';
    $dbpass = "Shagayu@12345";
    $db = "shagayudb";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("Failed to connect to database" . $conn->error);
    return $conn;
}
session_start();
$conn = openCon();
?>