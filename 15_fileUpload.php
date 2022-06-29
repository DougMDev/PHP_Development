<?php

    if(isset($_POST['submit'])) {

        $allowed_ext = ['png', 'jpg', 'jpeg', 'gif'];

        if(!empty($_FILES['upload']['name'])) {
            $file_name = $_FILES['upload']['name'];
            $file_type = $_FILES['upload']['type'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $file_size = $_FILES['upload']['size'];
            $target_dir = "uploads/${file_name}";

            //Get File ext
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            //Validate Extension
            if(in_array($file_ext, $allowed_ext)) {
                if($file_size <= 1000000) {
                    move_uploaded_file($file_tmp, $target_dir);
                    $message = '<p style="color: green;"> File Uploaded</p>';
                } else {
                    $message = '<p style="color: red;"> File Exceeds Size Limit!</p>';
                }
            } else {
                $message = '<p style="color: red;"> Invalid File Type</p>';
            }

        } else {
            $message = '<p style="color: red;"> Please Choose a File!</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
    method="POST" enctype="multipart/form-data">
    Select Image To Upload:
    <input type="file" name="upload">
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>