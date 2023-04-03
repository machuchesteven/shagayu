<?php require_once('./models/connect_db.php');
?>
<?php include 'auth.php'; ?>
<?php
$sql = "SELECT subscriber FROM subscription";

$subscriptions = mysqli_query($conn, $sql);



?>

<?php require_once('./models/connect_db.php'); ?>
<?php include_once('header.php'); ?>

<div class="container-fluid">
    <div class="container">
        <h1 class="primary-text">The Following are All Subscribed Emails</h1>
        <div class=" ml-2 ml-md-5">

            <?php

            if (mysqli_num_rows($subscriptions) > 0) {
                // Output each email address
                echo '<ol>';
                while ($row = mysqli_fetch_assoc($subscriptions)) {
                    echo '<li class="primary-text text-lg mb-2 py-2">';
                    echo $row["subscriber"] . "</li><hr />";
                }
                echo '</ol>';
            } else {
                echo '<h1 class="text-center primary-text">No email subscriptions found.</h1>';
            };
            ?>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>