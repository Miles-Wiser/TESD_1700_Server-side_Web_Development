<?php
require "page.php";

$page = new Page();
$page->title = "$page->title | Catalog";
$page->moreCSS = "catalog.css";

$page->DisplayHead();

?>
<main>
        <div class="container-product">
            <figure>
                <img src="../Project/Databases-Info/om_student_bari.jpg" alt="O'Malley Student Baritone">
                <figcaption>O'Malley Student 3/4 Baritone</figcaption>
            </figure>
            <div>
                <p>$739.00</p>
                <input class="btnAddToCart" type="submit" name="om-student-bari" value="Add To Cart">
            </div>
        </div>
        <div class="container-product">
            <figure>
                <img src="../Project/Databases-Info/jp_marching_bari.jpg" alt="John Packer Marching Baritone">
                <figcaption>John Packer Marching Baritone JP2053</figcaption>
            </figure>
            <div>
                <p>$2201.00</p>
                <input class="btnAddToCart" type="submit" name="jp-marching-bari" value="Add To Cart">
            </div>
        </div>
        <div class="container-product">
            <figure>
                <img src="../Project/Databases-Info/om_Bb_trom.jpg" alt="O'Malley Bb ContraBass Trombone">
                <figcaption>O'Malley Bb Contrabass Trombone Bb/F</figcaption>
            </figure>
            <div>
                <p>$3729.00</p>
                <input class="btnAddToCart" type="submit" name="om-contrabass-trom" value="Add To Cart">
            </div>
        </div>
        <div class="container-product">
            <figure>
                <img src="../Project/Databases-Info/ju_1600i_trum.jpg" alt="Jupiter 1600i Bb Trumpet">
                <figcaption>Jupiter 1600i Bb Trumpet</figcaption>
            </figure>
            <div>
                <p>$3109.00</p>
                <input class="btnAddToCart" type="submit" name="ju-1600i-trum" value="Add To Cart">
            </div>
        </div>
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
            <input id="price-text" name="price-text" type="text" size="4" maxlength="4" value="" max="9999" min="1">
            <input id="price-range" name="price-range" type="range" max="9999" min="1">
        </div>

    </aside>
    
<?php
$page->DisplayFooter();