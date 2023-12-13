<!DOCTYPE html>
<html lang="en">
<?php
require_once "includes/config_session.inc.php";
require_once "includes/login_view.inc.php";
require_once "includes/signup_view.inc.php";
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link to your external stylesheet -->
    <link rel="stylesheet" href="style.css" />
    <title>Black Box</title>
</head>

<body>
    <!-- Header Section -->
    <header>
        <!-- Logo and Project Name Container -->
        <div class="logo-container">
            <a href="index.php">
                <button class="logo-container">
                    <div class="header-logo">
                        <img src="images.png" alt="Your Logo">
                    </div>
                    <div class="project-name">Black Box</div>
                </button>
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
    <!-- Main Section -->
    <section id="main-section" class="main-section">
        <!-- Container for Site Details Form and Added Data -->
        <div class="center-container">
            <div class="site-details-container">
                <!-- Site Details Form -->
                <div class="site-details-form">
                    <center>
                        <h3>Add Site</h3>
                    </center>
                    <!-- Form for Adding a Site -->
                    <form id="addSiteForm">
                        <label for="siteName">Site Name:</label>
                        <input type="text" id="siteName" required />
                        <label for="username">Username:</label>
                        <input type="text" id="username" required />
                        <label for="siteEmail">Email:</label>
                        <input type="email" id="siteEmail" required />
                        <label for="sitePassword">Password:</label>
                        <input type="password" id="sitePassword" required />
                        <button type="button" onclick="addSite()">Add Site</button>
                    </form>
                </div>
                <!-- Added Site Data Section -->
                <div id="addedData" class="hidden">
                    <h4>Added Site Data:</h4>
                    <ul id="siteList"></ul>
                </div>
            </div>
        </div>
    </section>
    <section id="main-section" class="main-section">
        <!-- Container for Site Details Form and Added Data -->
        <div class="center-container">
            <div class="site-details-container">
                <!-- Site Details Form -->
                <div class="site-details-form">
                    <center>
                        <h3>Log Out</h3>
                    </center>
                    <!-- Form for Adding a Site -->
                    <form id="addSiteForm" action="includes/logout.inc.php" method="post">
                        <button>Log Out</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Section for Login -->

    <!-- Footer Section -->

    <footer>
        <div id="aboutUs">
            <h2>About Us</h2>
            <!-- About Us Content -->

            <p>Team Introduction: The Web Devolpment <br>

                Welcome to the realm of the Web Devolpment, where creativity meets expertise to drive success! Our team
                is a
                diverse group of talented individuals united by a passion for innovation and a commitment to excellence.
                <br>

                Meet Our Team: <br>

                Khalid - The Visionary Leader: With a keen eye for strategy, John leads our team with a vision for the
                future.
                His leadership inspires us to reach new heights. <br>

                Moustafa - The Creative Maven: Sarah's creative genius knows no bounds. From ideation to execution, she
                brings
                ideas to life with flair and imagination. <br>

                Anas - The Tech Guru: In the ever-evolving tech landscape, Mike is our go-to expert. His mastery of
                cutting-edge
                technologies keeps us ahead of the curve. <br>

                Ahmed- The Organizational Dynamo: Emma ensures the seamless functioning of our team. Her organizational
                prowess
                keeps projects on track and deadlines met. <br>

                Mohamed - The Problem Solver: When challenges arise, Alex is the problem-solving maestro. His analytical
                mind
                and resourcefulness make seemingly impossible tasks achievable. <br>

                Our Collaborative Spirit: <br>

                What sets us apart is our collaborative spirit. We believe in the power of teamwork, where each member's
                strengths complement the others. Together, we navigate challenges, celebrate victories, and constantly
                push the
                boundaries of what's possible.

                Our Mission: <br>

                The Web Devolpment are on a mission to redefine success through innovation. We strive not only to meet
                expectations but to exceed them, leaving a lasting impact on every project we undertake.
            </p>
        </div>
    </footer>
    <!-- JavaScript File -->
    <script src="script.js" defer></script>

</body>

</html>