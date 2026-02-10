
<!DOCTYPE html>
<html>
<header>
    <title>Log In</title>
</header>
<body>
    <?php
    $db = new mysqli("localhost", "root", "root", "login");
    if (mysqli_connect_errno()) {
        echo '<p>Error: could not connect to database.<br> Try again later.</p>';
        exit;
    }
    $stmt = "SELECT user_id pass_id FROM passwords";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->bind_result($user_id, $pass_id);

    while($stmt->fetch()) {
        
    }

    if (!isset($_POST['username']) || !isset($_POST['password']))
    {
    ?>
    <form method="post" action="index.php">
        <label for="username">Username</label>
        <input type="text" name="username" size="6">
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" size="6">
        <br><br>
        <input type="submit">
    </form>

    <?php
    }
    else if ($_POST['username'] == "user" || $_POST["password"] == "pass") {
    ?>
     <h1>Welcome User</h1>
    <?php
    }
    else {
    ?>
    <form method="post" action="index.php">
        <h3 style="color:red;">Invalid username/password</h3>
        <label for="username">Username</label>
        <input type="text" name="username" size="6">
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" size="6">
        <br><br>
        <input type="submit">
    </form> 
    <?php
    }
    ?>
</body>
</html>