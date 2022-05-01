<?php

include_once 'header.php';



?>

<div style="padding-left:16px">
    <h2>Log In</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="name" placeholder="Username/Email...">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type="submit" name="submit">Login</button>
        <br>
    </form>


</div>
</body>
</html>
