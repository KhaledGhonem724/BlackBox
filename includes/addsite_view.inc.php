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