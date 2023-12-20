<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    try {
        require_once "dbh.inc.php";
        require_once "login_model.inc.php";
        require_once "manage_site_model.inc.php";
        require_once "login_contr.inc.php";
        require_once "config_session.inc.php";
        // ERROR handler
        $errors = [];
        if (is_input_empty($username, $pwd)) {
            $errors["empty_input"] = "Fill in ALL fields!";
        }
        $result = get_user($pdo, $username);
        if (is_username_wrong($result)) {
            $errors["login_incorrect"] = "Incorrect login info!";
        }
        if (!is_username_wrong($result) && is_password_wrong($pwd, $result["pwd"])) {
            $errors["login_incorrect"] = "Incorrect login info!";
        }



        if ($errors) {
            $_SESSION["errors_login"] = $errors;
            // to save the wrong data forthe user to edit
            header("Location: ../login.php");
            die();
        }
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);
        $_SESSION["last_regeneration"] = time();
        $_SESSION["user_sites"] = get_sites($pdo, $_SESSION["user_id"]);
        $_SESSION["user_fav_sites"] = get_fav_sites($pdo, $_SESSION["user_id"]);

        // empty your resources
        header("Location: ../index.php?login=success");
        $pdo = null;
        $stmt = null;
        die();
    } catch (PDOException $e) {
        die("Query failed" . $e->getMessage());
    }
} else {
    header("Location: ../login.php");
    die();

}