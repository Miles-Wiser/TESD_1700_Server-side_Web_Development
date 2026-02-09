<?php
require "page.php";

$page = new Page();
$page->title = "$page->title | Catalog";
$page->moreCSS = "catalog.css";

$page->DisplayHead();

?>
<main>
        <?php
        // Login Verification for Database
        $db = new mysqli('localhost', 'root', 'root', 'music_store');
        if (mysqli_connect_errno()) {
            echo '<p>Error: could not connect to database.<br> Try again later.</p>';
            exit;
        }

        // Pulls data from database
        $query = "SELECT sku, product_name, price, product_image
                  FROM product_catalog";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $stmt->bind_result($sku, $product_name, $price, $product_image);

        // Print data to webpage
        while($stmt->fetch()) {
            echo "<div class='container-product'>
                  <form onsubmit='return add_to_cart(this);' method='post'>
                    <figure>
                        <img src='$product_image' alt='$product_name'>
                        <figcaption>$product_name</figcaption>
                    </figure>
                    <div>
                        <p>$$price</p>
                        <input type='hidden' name='sku' value='$sku'>
                        <input type='hidden' name='product_name' value='$product_name'>
                        <input type='hidden' name='price' value='$price'>
                        <input type='number' name='qty' min='1' max='10'>
                        <input class='btnAddToCart' type='submit' value='Add to Cart'>
                    </div>
                  </form>
                  </div>
                ";
        }

        // Close Database
        $stmt->free_result();
        $db->close();
        ?>
    </main>

    <aside>
        <div class="filter">
            <h4>Family</h4>
            <ul id="list-family">
                <li>
                    <input id="brasswind" name="brasswind" type="checkbox">
                    <label for="brasswind">Brasswind</label>
                </li>
                <li>
                    <input id="equipment" name="equipment" type="checkbox">
                    <label for="equipment">Equipment</label>
                </li>
                <li><input id="percussion" name="percussion" type="checkbox">
                    
                    <label for="percussion">Percussion</label>
                </li>
                <li>
                    <input id="piano" name="piano" type="checkbox">
                    <label for="piano">Piano</label>
                </li>
                <li>
                    <input id="string" name="string" type="checkbox">
                    <label for="string">String</label>
                </li>
                <li>
                    <input id="woodwind" name="woodwind" type="checkbox">
                    <label for="woodwind">Woodwind</label>
                </li>
            </ul>
        </div>
        <div class="filter">
            <h4>Color</h4>
            <ul id="list-color">
                <li>
                    <input id="laquer" name="laquer" type="checkbox">
                    <label for="laquer">Laquer</label>
                </li>
                <li>
                    <input id="silver" name="silver" type="checkbox">
                    <label for="silver">Silver</label>
                </li>
                <li>
                    <input id="yellow-brass" name="yellow-brass" type="checkbox">
                    <label for="yellow-brass">Yellow Brass</label>
                </li>
                <li>
                    <input id="yellow-gold" name="yellow-gold" type="checkbox">
                    <label for="yellow-gold">Yellow Gold</label>
                </li>
            </ul>
        </div>

        <div class="filter">
            <h4>Brand</h4>
            <ul id="list-brand">
                <li>
                    <input id="bach" name="bach" type="checkbox">
                    <label for="bach">Bach</label>
                </li>
                <li>
                    <input id="john-packer" name="john-packer" type="checkbox">
                    <label for="john-packer">John Packer</label>
                </li>
                <li>
                    <input id="jupiter" name="jupiter" type="checkbox">
                    <label>Jupiter</label>
                </li>
                <li>
                    <input id="o-malley" name="o-malley" type="checkbox">
                    <label for="o-malley">O'Malley</label>
                </li>
            </ul>
        </div>

        <div class="filter">
            <h4>Instrument</h4>
            <ul id="list-instrument">
                <li>
                    <input id="baritone" name="baritone" type="checkbox">
                    <label for="baritone">Baritone</label>
                </li>
                <li>
                    <input id="trombone" name="trombone" type="checkbox">
                    <label for="trombone">Trombone</label>
                </li>
                <li>
                    <input id="trumpet" name="trumpet" type="checkbox">
                    <label for="trumpet">Trumpet</label>
                </li>
            </ul>
        </div>

        <div class="filter">
            <h4>Price</h4>
            <input id="price-text" name="price-text" type="text" size="4" maxlength="4" max="9999" min="1">
            <input id="price-range" name="price-range" type="range" max="9999" min="1">
        </div>

    </aside>
    
<?php
$page->DisplayFooter();
?>