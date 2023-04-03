<?php
session_start();

// ... Authenticate the user ...

$_SESSION['user_id'] = $user_id;
header("Location: dashboard.php");
?>
