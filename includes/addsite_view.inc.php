<?php
declare(strict_types=1);


function check_addsite_errors()
{
    if (isset($_SESSION['errors_addsite'])) {
        $errors = $_SESSION['errors_addsite'];
        echo "<br>";
        foreach ($errors as $error) {
            echo '<p class="form-error">' . $error . "</p>";
        }
        unset($_SESSION['errors_addsite']);
    } else if (isset($_GET['addsite']) && $_GET['addsite'] === "success") {
        echo "<br>";
        echo '<p class="form-success">' . "Site Data Added" . "</p>";
    }
}
function display_sites()
{

    if (!isset($_SESSION["user_sites"])) {
        echo '<div class="card">
                <div class="card-body">
                    <p></p>
                    <p>Log in to see your sites</p>
                </div>
            </div>';
        return;
    }
    if (empty($_SESSION["user_sites"])) {
        echo '<div class="card">
                <div class="card-body">
                    <p>This user doesn\'t have any sites</p>
                </div>
            </div>';
        return;
    }
    foreach ($_SESSION["user_sites"] as $site) {
        echo '<div class="card">
                <div class="card-body">
                    <p>Site : <a href="' . $site['sitelink'] . '" target="_blank" rel="noopener noreferrer">' . $site['sitename'] . '</a></p>
                    <p>Username: ' . $site['siteusername'] . '</p>
                    <p>Email: ' . $site['siteemail'] . '</p>
                    <p>Password: ' . $site['sitepwd'] . '</p>
                    <div class="icon-container">
                        <i class="fas fa-trash-alt remove-icon"></i>
                        <i class="far fa-star favorite-icon"></i>
                    </div>
                </div>
            </div>';
    }
}
function display_fav_sites()
{

    if (!isset($_SESSION["user_fav_sites"])) {
        echo '<div class="card">
                <div class="card-body">
                    <p></p>
                    <p>Log in to see your sites</p>
                </div>
            </div>';
        return;
    }
    if (empty($_SESSION["user_fav_sites"])) {
        echo '<div class="card">
                <div class="card-body">
                    <p>This user doesn\'t have any favorite sites</p>
                </div>
            </div>';
        return;
    }
    foreach ($_SESSION["user_fav_sites"] as $site) {
        echo '<div class="card">
                <div class="card-body">
                    <p>Site : <a href="' . $site['sitelink'] . '" target="_blank" rel="noopener noreferrer">' . $site['sitename'] . '</a></p>
                    <p>Username: ' . $site['siteusername'] . '</p>
                    <p>Email: ' . $site['siteemail'] . '</p>
                    <p>Password: ' . $site['sitepwd'] . '</p>
                    <div class="icon-container">
                        <i class="fas fa-trash-alt remove-icon"></i>
                        <i class="far fa-star favorite-icon"></i>
                    </div>
                </div>
            </div>';
    }
}