<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    try {
        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";
        require_once "config_session.inc.php";
        // ERROR handler
        $errors = [];
        if (is_input_empty($username, $email, $pwd)) {
            $errors["empty_input"] = "Fill in ALL fields!";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "invalid email used!";
        }
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "username already taken!";
        }
        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "this email already registered!";
        }
        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            // to save the wrong data forthe user to edit
            $signupData = [
                "username" => $username,
                "email" => $email,
            ];
            $_SESSION["signup_data"] = $signupData;

            header("Location: ../signup.php");
            die();
        }
        // QUERY handler 
        set_user($pdo, $username, $pwd, $email);
        // empty your resources
        $pdo = null;
        $stmt = null;
        header("Location: ../signup.php?signup=success");
        die();
    } catch (PDOException $e) {
        die("Query failed" . $e->getMessage());
    }
} else {
    header("Location: ../signup.php");
}