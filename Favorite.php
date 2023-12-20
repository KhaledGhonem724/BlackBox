<?php
require_once "includes/config_session.inc.php";
require_once "includes/login_view.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/addsite_view.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link to your external stylesheet -->
    <link rel="stylesheet" href="style.css" />
    <title>Black Box</title>

    <head>
        <!-- Other meta tags and stylesheets -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <script src="script.js"></script>
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
                <li><a href="Favorite.php">Favorite</a></li>
                <li><a href="#footer">About us</a></li>
                <li><a href="login.php">
                        <?php output_username() ?>
                    </a></li>
            </ul>
        </nav>
    </header>
</body>
<div class="column">
    <?php
    display_fav_sites();
    ?>
</div>
<footer id="footer">
    <h2>About Us</h2>
    <p>Team Introduction: The Web Development</p>
    <p>Welcome to the realm of Web Development, where creativity meets expertise to drive success! Our team is a diverse
        group of talented individuals united by a passion for innovation and a commitment to excellence.</p>

    <h3>Meet Our Team:</h3>
    <ul>
        <li class="team-member">Khalid - Visionary Leader and Backend Developer: A leader in both the ICPC community and
            as a backend developer. Khalid's problem-solving skills and dedication reflect in his Computer Science
            studies, where he's at the third level.</li>
        <li class="team-member">Ahmed - Frontend Developer and Community Vice-Leader: Ahmed contributes as a skilled
            frontend developer and vice-leader in the ICPC community. He excels in problem-solving and is progressing in
            Computer Science studies at the third level.</li>
        <li class="team-member">Moustafa - Frontend Developer and ICPC Contributor: Moustafa, a frontend developer and
            active ICPC team member, demonstrates strong problem-solving skills. His dedication is evident as he
            progresses to the third level in Computer Science studies.</li>
        <li class="team-member">Anas - Frontend Developer and ICPC Team Member: Anas, a dedicated frontend developer and
            ICPC team member, showcases strong problem-solving abilities. His commitment is apparent as he advances in
            Computer Science studies at the third </li>
        <li class="team-member">Mohamed - AI Engineer and Computer Science Student: Mohamed specializes in Artificial
            Intelligence and excels in Computer Science studies, reaching the third level in his educational journey.
        </li>

    </ul>

    <p><strong>Our Collaborative Spirit:</strong> What sets us apart is our collaborative spirit. We believe in the
        power of teamwork, where each member's strengths complement the others. Together, we navigate challenges,
        celebrate victories, and constantly push the boundaries of what's possible.</p>

    <p><strong>Our Mission:</strong> The Web Development is on a mission to redefine success through innovation. We
        strive not only to meet expectations but to exceed them, leaving a lasting impact on every project we undertake.
    </p>
</footer>

</html>