<?php
class Page {
    public $title = "Dave's Music Store";
    public $moreCSS = "index.css";
    public $btnNav = array("Home" => "index.php",
                            "Catalog" => "catalog.php",
                            "Brasswinds" => "catalog.php#",
                            "Brand" => "catalog.php#",
                            "Service and Repair" => "#",
                            "Cart" => "cart.php"
                        );

    public function IsURLCurrentPage($url): bool {
        if(strpos($_SERVER['PHP_SELF'],$url)===false) {
            return false;
        } else {
            return true;
        }
    }

    public function DisplayButton($name, $url, $active=false) {
        if ($active) {
            echo "<a href=\"$url\">$name</a>";
        }
    }
    public function DisplayNav($buttons) {
        echo "<nav>";
        foreach ($buttons as $name => $url) {
            $this->DisplayButton($name, $url, !$this->IsURLCurrentPage($url));
        }
    }

    public function DisplayHead() {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta lang="en">
            <meta charset="UTF-8">
            <title><?=$this->title?></title>
            <link href="../Project/CSS/reset.css" rel="stylesheet">
            <link href="../Project/CSS/layout.css" rel="stylesheet">
            <link href="../Project/CSS/<?=$this->moreCSS?>" rel="stylesheet">
            <script src="../Project/Scripts/cart.js" defer></script>
        </head>
        <body>
            <header>
                <div class="header-logo">
                    <img src="../Project/Images/daves-music-store-logo.png" alt="Dave's Music Store Logo">
                    <h1>Dave's Music Store</h1>
                </div>
                <?=$this->DisplayNav($this->btnNav);?>

            </header>
        </body>
        </html>
        <?php
    }

    public function DisplayFooter() {
        ?>
        <footer>
            <div class="nav-footer" id="container-greeting">
                <h3>Dave's Music Store</h3>
                <p>Buy from Dave's with complete faith. With over 120 years of music
                    and repair experience, we take care of you!
                </p>
            </div>
            <div class="nav-footer" id="container-collections">
                <h3>Collections</h3>
                <nav id="nav-collections">
                    <a href="catalog.php">Brasswinds</a>
                    <a href="catalog.php">Brand</a>
                    <a href="catalog.php">Catalog</a>
                </nav>
            </div>
            <div class="nav-footer" id="container-support">
                <h3>Support</h3>
                <nav id="nav-support">
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Service and Repair</a>
                </nav>
            </div>
        </footer>
        <?php
    }
}
?>