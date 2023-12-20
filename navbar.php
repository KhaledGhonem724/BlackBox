<?php
require_once "includes/config_session.inc.php";
require_once "includes/login_view.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/manage_site_view.inc.php";
?>
<header>
    <nav class="navbar">
        <a href="index.php" class="logo-button">
            <img src="images.png" alt="Your Logo" class="navbar-logo">
            <span class="project-name">Black Box</span>
        </a>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="Favorite.php">Favorite</a></li>
            <li><a href="#footer">About us</a></li>
            <li><a href="login.php">
                    <?php output_username(); ?>
                </a></li>
        </ul>
    </nav>
</header>