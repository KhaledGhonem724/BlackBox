<?php
require_once "includes/config_session.inc.php";
require_once "includes/login_view.inc.php";
require_once "includes/signup_view.inc.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <section id="section1" class="section1">
        <div class="login-container">

            <!-- Login Form -->
            <form action="includes/login.inc.php" method="post">
                <center>
                    <h2>Login</h2>
                </center>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="username" required />
                <label for="password">Password:</label>
                <input type="password" id="password" name="pwd" placeholder="password" required />
                <button>Login</button>
            </form>
            don't have an account <a href="signup.php">register</a> now!

        </div>
    </section>
    <?php
    check_login_errors();
    ?>
</body>

</html>