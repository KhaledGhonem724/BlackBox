<?php
require_once "includes/config_session.inc.php";
require_once "includes/login_view.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/manage_site_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link to your external stylesheet -->
    <link rel="stylesheet" href="style.css" />
    <title>Black Box</title>
    <!-- Other meta tags and stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="script.js"></script>
</head>

<body>
    <?php
    require "navbar.php";
    ?>
    <div class="columns-container">
        <div class="column">
            <?php
            display_sites();
            ?>
        </div>

        <div class="column">
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
                            <form id="addSiteForm" action="includes/addsite.inc.php" method="post">
                                <label for="siteName">Site Name:</label>
                                <input type="text" id="siteName" name="sitename" />
                                <label for="sitelink">Site Link:</label>
                                <input type="text" id="sitelink" name="sitelink" />
                                <label for="username">Username:</label>
                                <input type="text" id="username" name="siteusername" />
                                <label for="siteEmail">Email:</label>
                                <input type="text" id="siteEmail" name="siteemail" />
                                <label for="sitePassword">Password:</label>
                                <input type="password" id="sitePassword" name="sitepwd" />
                                <button>Add Site</button>
                            </form>
                            <?php
                            check_addsite_errors();
                            ?>
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

        </div>
    </div>
    <?php
    require "footer.php";
    ?>
</body>

</html>