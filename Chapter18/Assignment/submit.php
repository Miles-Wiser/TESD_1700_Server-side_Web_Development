<!DOCTYPE html>
<html>
<head>
    <title>Site Submission Results</title>
</head>
<body>
    <h1>Site Submission Results</h1>

    <?php

    $url = $_POST['url'];

    // check the URL
    $url = parse_url($url);
    $host = $url['host'];

    if (!($ip = gethostbyname($host))) {
        echo 'Host for URL does not hava valid IP address.';
        exit;
    }

    echo 'Host ('.$host.') is at IP '.$ip.'<br>';

    ?>
</body>
</html>