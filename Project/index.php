<?php
require "Scripts/page.php";

$page = new Page();

$page->DisplayHead();

?>

<main>
    <a href="catalog.php" id="main-shop" class="section-preview">
        <div>
            <h2>Professional Quality</h2>
            <h3>Fit For Every Level</h3>
            <p>Shop Now</p>
        </div>
    </a>
    <a href="#" id="main-horns" class="section-preview">
        <div>
            <h2>Beginner Horns</h2>
            <p>Browse high quality and versitile beginner friendly horns.</p>
        </div>
    </a>
    <a href="#" id="main-woodwinds" class="section-preview">
        <div>
            <h2>Woodwinds</h2>
            <p>View our new woodwind selection from Amati to Yamaha</p>
        </div>
    </a>
    <a href="#" id="main-electric" class="section-preview">
        <div>
            <h2>Electric Equipment</h2>
            <p>Elevate your sounds with our line of amps and electric gear.</p>
        </div>
    </a>
</main>

<?php
$page->DisplayFooter();
?>