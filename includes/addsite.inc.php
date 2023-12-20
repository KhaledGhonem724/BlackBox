<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sitename = $_POST["sitename"];
    $siteusername = $_POST["siteusername"];
    $siteemail = $_POST["siteemail"];
    $sitepwd = $_POST["sitepwd"];
    $sitelink = $_POST["sitelink"];
    try {
        require_once "dbh.inc.php";
        require_once "addsite_model.inc.php";
        require_once "addsite_contr.inc.php";
        require_once "config_session.inc.php";
        // ERROR handler
        $errors = [];
        if (is_sitename_empty($sitename)) {
            $errors["empty_site_name"] = "Enter the site name to save!";
        }
        if (is_pwd_empty($sitepwd)) {
            $errors["empty_site_password"] = "Enter a password to save!";
        }
        if (is_user_empty($siteusername, $siteemail)) {
            $errors["empty_site_user"] = "Enter a username or an e-mail to save!";
        }
        if (is_user_out()) {
            $errors["no_user"] = "Please login first";
        }
        if ($errors) {
            $_SESSION["errors_addsite"] = $errors;
            // to save the wrong data forthe user to edit
            header("Location: ../index.php");
            die();
        }
        add_site($pdo, $sitename, $siteusername, $siteemail, $sitepwd, $sitelink);
        $_SESSION["user_sites"] = get_sites($pdo, $_SESSION["user_id"]);
        $_SESSION["user_fav_sites"] = get_fav_sites($pdo, $_SESSION["user_id"]);
        // empty your resources
        $pdo = null;
        $stmt = null;
        header("Location: ../index.php?addsite=success");
        die();
    } catch (PDOException $e) {
        die("Query failed" . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}