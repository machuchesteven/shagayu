<?php require_once './models/connect_db.php'; ?>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get department from the form
    if (isset($_POST['department'])) {
        $department = $_POST['department'];
    }

    // Check if file has been uploaded
    if (isset($_FILES['image']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {

        // Get the file information
        $file_name = $_FILES['fileToUpload']['name'];
        $file_size = $_FILES['fileToUpload']['size'];
        $file_tmp = $_FILES['fileToUpload']['tmp_name'];
        $file_type = $_FILES['fileToUpload']['type'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Check if the file type is allowed
        $allowed_extensions = array("jpg", "jpeg", "png", "gif");
        if (in_array($file_ext, $allowed_extensions)) {

            // Generate a unique file name
            $file_name = uniqid() . "." . $file_ext;

            // Upload the file to the server
            $upload_path = "uploads/" . $file_name;
            move_uploaded_file($file_tmp, $upload_path);

            // Insert the image data into the database
            $sql = "INSERT INTO images (department, file_name, file_size, file_type, file_path) VALUES ('$department', '$file_name', '$file_size', '$file_type', '$upload_path')";

            if (mysqli_query($conn, $sql)) {
                $_SESSION['message'] = "Image uploaded successfully";
                
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        echo "Error: No file uploaded.";
    }
}

?>