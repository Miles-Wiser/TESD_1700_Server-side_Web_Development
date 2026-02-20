<?php
require "Scripts/page.php";

$page = new Page();
$page->title = "$page->title | Cart";
$page->moreCSS = "cart.css";

$page->DisplayHead();

?>
<main>
    <h3>Cart Ordered</h3>
    <p>Your purchase as been made. A copy of your receipt has been sent to your email.</p>

</main>

<?php
$page->DisplayFooter();

?>