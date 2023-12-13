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
        <!-- Logo and Project Name Container -->
        <div class="logo-container">
            <a href="index.php">
                <div class="header-logo">
                    <img src="images.png" alt="Your Logo">
                </div>
                <div class="project-name">Black Box</div>
            </a>
        </div>
        <!-- Navigation Buttons -->
        <!-- Add Site Button -->
        <a href="#main-section">
            <button>Add Site</button>
        </a>
        <!-- Log In Button -->
        <!-- About Us Button -->
        <a href="#aboutUs">
            <button>About As</button>
        </a>
        <a href="login.php">
            <button>
                <?php output_username() ?>
            </button>
        </a>

    </header>
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