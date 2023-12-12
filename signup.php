<?php
require_once "includes/signup_view.inc.php";
require_once "includes/config_session.inc.php";
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
            <a href="login.html" id="register">login</a>
        </div>
    </section>
    <?php
    check_sigup_errors();
    ?>
</body>

</html>