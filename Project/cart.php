<?php
require "page.php";

$page = new Page();
$page->title = "$page->title | Cart";
$page->moreCSS = "cart.css";

$page->DisplayHead();

?>
<main>
    <form action="" method="post">
        <div>
            <label for="username">Username:</label>
            <input id="username" type="text" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input id="password" type="password" name="password" pattern="[A-Za-z0-9]{6,10}" required><br>

            <input id="chPassword" type="checkbox" onclick="showPassword()">
            <label for="chPassword">Show Password</label>
            <script defer>
                function showPassword() {
                    var x = document.getElementById("password");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
            </script>
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</main>

<?php
$page->DisplayFooter();