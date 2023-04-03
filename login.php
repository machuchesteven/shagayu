<?php require_once('./models/connect_db.php'); ?>
<?php
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
?>
<?php require_once('header.php'); ?>
<div class="login-page container-fluid">
    <div class="container my-5 ">
        <form action="/" method="POST">
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</div>
<?php require_once('footer.php'); ?>