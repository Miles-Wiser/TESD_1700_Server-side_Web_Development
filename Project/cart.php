<?php
require "Scripts/page.php";

$page = new Page();
$page->title = "$page->title | Cart";
$page->moreCSS = "cart.css";

$page->DisplayHead();

?>
<main> 
    <?php
    
    echo "<div id='table-container'>
            <script src='Scripts/cart.js'></script>
            <script>print_cart();</script>
            </div>
        ";
    ?>
    
</main>

<?php
$page->DisplayFooter();
?>