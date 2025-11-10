<?php
// Example 1

switch ($_POST['gender']) {
    case 'Male':
    case 'Female':

        echo "<h1>Congratulations!<br>
             You are: ".$_POST['gender'].".</h1>";
    break;

    default:
        echo "<h1><span style=\"color: red;\">WARNING:</span><br>
             Invalid input value specified.</h1>";
}

// Example 2
$input_str = "<p align=\"center\">The user gave us \"15000?\".<p>
             <script type=\"text/javascript\">
             // malicious JavaScript code goes here.
             </script>";


$str = htmlspecialchars($input_str, ENT_NOQUOTES, "UTF-8");
echo nl2br($str);

$str = htmlentities($input_str, ENT_NOQUOTES, "UTF-8");
echo nl2br($str);

?>