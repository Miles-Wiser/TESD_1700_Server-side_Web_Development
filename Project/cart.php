<?php
require "page.php";

$page = new Page();
$page->title = "$page->title | Cart";
$page->moreCSS = "cart.css";

$page->DisplayHead();

if(!isset($_POST['sku'], $_POST['qty'])) {
    echo "<p>Your Cart is empty</p>";
    exit;
}
?>
<main>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <?php
        $sku = (int)$_POST['sku'];
        $qty = (int)$_POST['qty'];




        // Login Verification for Database
        $db = new mysqli('localhost', 'root', 'root', 'music_store');
        if (mysqli_connect_errno()) {
            echo '<p>Error: could not connect to database.<br> Try again later.</p>';
            exit;
        }

        // Pull and store data from database
        $query = "SELECT product_name, price
                  FROM product_catalog
                  WHERE sku = ?";

        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $sku);
        $stmt->execute();
        $stmt->bind_result($product_name, $price);
        $stmt->fetch();
        $stmt->close();

        // Add data to `orders_items` table
        $query = "INSERT INTO order_items (sku, quantity)
                  VALUES (?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ii", $sku, $qty);
        $stmt->execute();
        $stmt->close();


        // Pulls data from database
        $salesTax = 0.06325;
        $total = $price * $qty;
        $grandTotal = $total * (1 + $salesTax);
        

        echo "<tbody>
            <tr>
                <td>$product_name</td>
                <td>$qty</td>
                <td>$".number_format($price, 2)."</td>
                <td>$".number_format($total, 2)."</td>
            </tr>
            </tbody>";


        echo "<tfoot>
            <tr>
                <td colspan='2'></td>
                <td>Sales Tax</td>
                <td>".number_format(100 * $salesTax,3)."%</td>
            </tr>
            <tr>
                <td colspan='2'></td>
                <td>Total</td>
                <td>$".number_format($grandTotal, 2)."</td>
            </tr>
        </tfoot>
        ";

        $db->close();
        ?>
    </table>

    <input type='submit'>
</main>

<?php
$page->DisplayFooter();
?>