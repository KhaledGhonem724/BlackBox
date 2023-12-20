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
    <header>
        <!-- Navigation Bar -->
        <nav class="navbar">
            <a href="index.php" class="logo-button">
                <img src="images.png" alt="Your Logo" class="navbar-logo">
                <span class="project-name">Black Box</span>
            </a>
            <ul class="nav-links">
                <li><a href="#link3">Favorite</a></li>
                <li><a href="Favorite.php">About us</a></li>
                <li><a href="login.php">
                        <?php output_username() ?>
                    </a></li>
            </ul>
        </nav>
    </header>
    <section id="section1" class="section1">
        <div class="login-container">

            <!-- signup Form -->
            <form action="includes/signup.inc.php" method="post">
                <center>
                    <h2>Register</h2>
                </center>
                <label for="username">Username:</label>
                <input type="text" id="NewUserName" name="username" placeholder="Enter your name" required />
                <label for="siteEmail">Email:</label>
                <input type="text" id="NewEmail" name="email" placeholder="Enter your e-mail" required />
                <label for="sitePassword">Password:</label>
                <input type="password" id="NewPassword" name="pwd" placeholder="Enter a strong password" required />
                <button>Register</button>
            </form>
            <div id="register-massge">
                Already have an account! <span>
                    <a href="login.php" id="register">login</a>
                </span>
            </div>
            <?php
            check_sigup_errors();
            ?>
        </div>
    </section>
    <?php
    require "footer.php";
    ?>

</body>

</html>