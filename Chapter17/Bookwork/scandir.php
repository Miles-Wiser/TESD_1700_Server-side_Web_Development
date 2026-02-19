<!DOCTYPE html>
<html>
<head>
    <title>Browse Directories</title>
</head>
<body>
    <h1>Browsing</h1>

<?php
$dir = '/Applications/MAMP/htdocs/TESD_1700_Server-side_Web_Development/Chapter17/Bookwork/';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

echo '<p>Upload directory is '.$dir.'</p>';
echo '<p>Directory Listing in alphabetical order, ascending:</p><ul>';

foreach($files1 as $file) {
    if ($file != "." && $file != "..") {
        echo '<li><a href="filedetails.php?file='.$file.'">'.$file.'</a></li>';
    }
}

echo '</ul>';

echo '<p>Upload directory is '.$dir.'</p>';
echo '<p>Directory Listing in alphabetical, descending:</p><ul>';

foreach($files2 as $file) {
    if ($file != "." && $file != "..") {
        echo '<li><a href="filedetails.php?file='.$file.'">'.$file.'</a></li>';
    }
}

echo '</ul>';

?>
</body>
</html>