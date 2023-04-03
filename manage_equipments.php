<?php require_once('./models/connect_db.php'); ?>

<?php include 'auth.php'; ?>
<?php require_once 'header.php';
?>
<div class="container-fluid">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Equipment Name</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="container-fluid">
    <div class="container" id="add-equipment">
        <form action="" method="post">
            <label for="title" class="col-sm-2 control-label">Equipment Name</label>
            <input type="text" for="title" name="title" class="m-2 rounded">
            <hr />

        </form>
    </div>
</div>

<?php require_once('footer.php'); ?>