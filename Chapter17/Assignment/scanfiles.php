<!DOCTYPE html>
<html>
<head>
    <title>Search Files</title>
</head>
<body>
    <nav>
        <a href="index.html">Home</a>
        <a href="scanfiles.php">Files</a>
    </nav>

    <?php
    $upload_dir = '/Assignment/Uploads/';
    $dir = opendir($upload_dir);

    echo "<h1>Directory:</h1><h2>$upload_dir</h2>";

    echo "<ul>";
    while (false !== ($file = readdir($dir))) {
        // skip self and parent
        if ($file == '.' || $file == '..') {
            continue;
        }

        echo "<li>$file</li>";
    }
    echo "</ul>";

    ?>
</body>
</html>