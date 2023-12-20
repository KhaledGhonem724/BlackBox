<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $displayUsername = $_POST["displayUsername"];
    $displayEmail = $_POST["displayEmail"];
    $displayPwd = $_POST["displayPwd"];
    if (isset($_POST['favorite_button'])) {
        try {
            require_once "dbh.inc.php";
            require_once "manage_site_model.inc.php";
            require_once "manage_site_contr.inc.php";
            require_once "config_session.inc.php";
            // No ERROR handler (impossible - until inspect)
            switch_favourite($pdo, $displayUsername, $displayEmail, $displayPwd);
            $_SESSION["user_sites"] = get_sites($pdo, $_SESSION["user_id"]);
            $_SESSION["user_fav_sites"] = get_fav_sites($pdo, $_SESSION["user_id"]);
            // empty your resources
            $pdo = null;
            $stmt = null;
            header("Location: ../index.php?deletesite=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    } else if (isset($_POST['delete_button'])) {
        try {
            require_once "dbh.inc.php";
            require_once "manage_site_model.inc.php";
            require_once "manage_site_contr.inc.php";
            require_once "config_session.inc.php";
            // No ERROR handler (impossible - until inspect)

            delete_site($pdo, $displayUsername, $displayEmail, $displayPwd);
            $_SESSION["user_sites"] = get_sites($pdo, $_SESSION["user_id"]);
            $_SESSION["user_fav_sites"] = get_fav_sites($pdo, $_SESSION["user_id"]);
            // empty your resources
            $pdo = null;
            $stmt = null;
            header("Location: ../index.php?deletesite=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    } else {
        //no button pressed
    }
} else {
    header("Location: ../index.php");
}