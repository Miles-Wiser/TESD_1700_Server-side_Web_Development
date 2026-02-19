<!DOCTYPE html>
<html>
<head>
<title>Uploading...</title>
</head>
<body>
    <nav>
        <a href="index.html">Home</a>
        <a href="scanfiles.php">Files</a>
    </nav>

    <?php
    if ($_FILES['file']['error'] > 0) {
        echo '<p>Problem:</p>';

        switch ($_FILES['file']['error']) {
            case 1:
                echo '<p>File too large; exceeds upload_max_filesize</p>';
                exit;
            case 2:
                echo '<p>File too large; exceeds max_file_size</p>';
                exit;
            case 3:
                echo '<p>File partially unloaded</p>';
                exit;
            case 4:
                echo '<p>No file provided</p>';
                exit;
            case 6:
                echo '<p>Cannot upload file: No temp directory specified</p>';
                exit;
            case 7:
                echo '<p>Upload failed: cannot load to disk</p>';
                exit;
            case 8:
                echo '<p>A PHP extension block upload</p>';
                exit;
        }
    }

    // Change $dir_destination to the desired destination for the file
    $dir_destination = '/Assignment/Uploads/';
    $upload_file = $dir_destination.$_FILES['file']['name'];

    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $upload_file))
        {
            echo '<p>Problem: Could not move file to destination directory.</p>';
            exit;
        }
    }
    else {
        echo '<p>Problem: Possible file upload attack. Filename: ';
        echo $_FILES['file']['name'].'</p>';
        exit;
    }

    echo "<p>Upload Successful</p>";
    ?>

    <a href="../Assignment/scanfiles.php">View Files</a>
</body>
</html>