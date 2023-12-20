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
    <?php
    require "navbar.php";
    ?>
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
            <div id="register-massge">
                don't have an account! <span>
                    <a href="signup.php" id="register">register</a>
                </span>
            </div>
            <?php
            check_login_errors();
            ?>
        </div>
    </section>
    <?php
    require "footer.php";
    ?>
</body>

</html>