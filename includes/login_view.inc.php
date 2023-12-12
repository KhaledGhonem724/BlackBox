<?php
declare(strict_types=1);
function check_login_errors()
{
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];
        echo "<br>";
        foreach ($errors as $error) {
            echo '<p class="form-errors">' . $error . '</p>';
        }
        unset($_SESSION["errors_login"]);
    } else if (isset($_Get["login"])) { //else if (isset($_Get["login"]) && $_Get["login"] == "success" ) {
        echo "<br>";
        echo '<p class="form-success">Login success!</p>';

    }

} // 