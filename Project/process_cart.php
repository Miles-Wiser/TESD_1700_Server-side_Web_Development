<?php
require "page.php";

$page = new Page();
$page->title = "$page->title | Cart";
$page->moreCSS = "cart.css";

$page->DisplayHead();

// Login Verification for Database
$db = new mysqli('localhost', 'root', 'root', 'music_store');
if (mysqli_connect_errno()) {
    echo '<p>Error: could not connect to database.<br> Try again later.</p>';
    exit;
}

// header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sku = $_POST['sku'] ?? '';
    $qty = $_POST['qty'] ?? 0;
    $product_name = $_POST['product_name'] ?? '';
    $price = $_POST['price'] ?? 0;

    // Add data to `orders_items` table
    $query = "INSERT INTO order_items (sku, quantity)
    VALUES (?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param("si", $sku, $qty);
    $stmt->execute();
    $stmt->close();
}

?>
<main>
    <h3>Cart Ordered</h3>
    <p>Your purchase as been made. A copy of your receipt has been sent to your email.</p>

</main>

<?php
$page->DisplayFooter();

?>