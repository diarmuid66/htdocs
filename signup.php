<?php

include_once 'header.php';



?>

<div style="padding-left:16px">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <br>
        <input type="text" name="name" placeholder="Full Name...">
        <br>
        <input type="text" name="email" placeholder="Email...">
        <br>
        <input type="text" name="uid" placeholder="Username...">
        <br>
        <input type="password" name="pwd" placeholder="Password...">
        <br>
        <input type="password" name="pwdrepeat" placeholder="Confirm Password...">
        <br>
        <button type="submit" name="submit">Sign Up</button>
        <br>
    </form>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "none" ) {
        echo "<p>Save Success</p>";

        }
        else{
            echo "<p>Save Fail</p>";

        }
    }

    ?>

</div>
</body>



</html>
