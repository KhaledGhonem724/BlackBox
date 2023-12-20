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
function card($site): string
{
    return '<div class="card">
                <div class="card-body">
                    <p>Site : <a href="' . $site['sitelink'] . '" target="_blank" rel="noopener noreferrer">' . $site['sitename'] . '</a></p>
                    <form class="displatSiteForm" action="includes/manage_site.inc.php" method="post">
                        <input type="text" name="displayUsername" placeholder="No Username" value="' . $site['siteusername'] . ' "
                            readonly>
                        <input type="text" name="displayEmail" placeholder="No Email" value="' . $site['siteemail'] . '" readonly>
                        <input type="text" name="displayPwd" placeholder="No Password" value="' . $site['sitepwd'] . '" readonly>
                        <input type="submit" name="delete_button" value="Delete">
                        <input type="submit" name="favorite_button" value="Favorite" />
                    </form>
                </div>
            </div>';
}
function noCard(): string
{
    return '<div class="card">
                <div class="card-body">
                    <p>This user doesn\'t have any sites</p>
                </div>
            </div>';
}
function cardNoUser(): string
{
    return '<div class="card">
                <div class="card-body">
                    <p></p>
                    <p>Log in to see your sites</p>
                </div>
            </div>';
}
function display_sites()
{

    if (!isset($_SESSION["user_sites"])) {
        echo cardNoUser();
        return;
    }
    if (empty($_SESSION["user_sites"])) {
        echo noCard();
        return;
    }
    foreach ($_SESSION["user_sites"] as $site) {
        echo card($site);
    }
}
function display_fav_sites()
{

    if (!isset($_SESSION["user_fav_sites"])) {
        echo cardNoUser();
        return;
    }
    if (empty($_SESSION["user_fav_sites"])) {
        echo noCard();
        return;
    }
    foreach ($_SESSION["user_fav_sites"] as $site) {
        echo card($site);
    }
}