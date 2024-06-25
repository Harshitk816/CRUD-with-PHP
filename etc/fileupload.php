<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="uploadfile"><br><br>
        <input type="submit" name="submit" value="Upload File">
        <?php
        $filename = $_FILES["uploadfile"]["name"];//for getting name of the uploaded file
        $tempfolder = $_FILES["uploadfile"]["tmp_name"];//for getting name of the uploaded file
        $folder = "images/".$filename;
        echo  "<img src='$folder' height='100px' width='100px'>";

        move_uploaded_file($tempfolder, $folder);//moves file from php temp folder  to our specified folder
        ?>
    </form>
</body>
</html>
