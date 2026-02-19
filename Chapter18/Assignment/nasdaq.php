<!DOCTYPE html>
<html>
<head>
    <title>Stock Quote From NASDAQ</title>
</head>
<body>

    <?php

    $url = 'https://jsonplaceholder.typicode.com/todos/28';

    if (!($contents = json_decode(file_get_contents($url), true))) {
        die("Failed to open $url");
    }

    $userId = $contents['userId'];
    $price = $contents['id'];

    // Get the "Stock" symbol
    $tempSymbol = $contents['title'];
    $symbol = "";
    $words = explode(" ", $tempSymbol);
    
    $count = 0;
    foreach ($words as $word) {
        if ($count == 4) break;
        else $count++;
        if (!empty($word)) {
            $symbol .= strtoupper(substr($word, 0, 1)); 
        }
    }

    $completed = $contents['completed'];

    echo "<h1>Stock Quote for $symbol</h1>";
    echo "$symbol sold at: $$price";

    // acknowledge source
    echo'<p>Information used and altered from: <br><a href="'.$url.'">'.$url.'</a>.</p>';
    ?>
</body>
</html>