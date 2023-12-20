<?php
declare(strict_types=1);
require_once "dbh.inc.php";
function add_site(object $pdo, string $sitename, string $siteusername, string $siteemail, string $sitepwd, string $sitelink)
{
    $query = "INSERT INTO sites (sitename, siteusername, siteemail, sitepwd, owner_id,sitelink) VALUES
            (:sitename, :siteusername, :siteemail, :sitepwd, :owner_id, :sitelink);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":sitename", $sitename);
    $stmt->bindParam(":siteusername", $siteusername);
    $stmt->bindParam(":siteemail", $siteemail);
    $stmt->bindParam(":sitepwd", $sitepwd);
    $stmt->bindParam(":owner_id", $_SESSION["user_id"]);
    $stmt->bindParam(":sitelink", $sitelink);
    $stmt->execute();
}
function delete_site(object $pdo, string $displayUsername, string $displayEmail, string $displayPwd)
{

    $query = "DELETE FROM sites WHERE owner_id=:owner_id AND siteusername=:displayUsername AND siteemail=:displayEmail AND sitepwd=:displayPwd ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":owner_id", $_SESSION["user_id"]);
    $stmt->bindParam(":displayUsername", $displayUsername);
    $stmt->bindParam(":displayEmail", $displayEmail);
    $stmt->bindParam(":displayPwd", $displayPwd);
    $stmt->execute();
}
function switch_favourite(object $pdo, string $displayUsername, string $displayEmail, string $displayPwd)
{
    $query = "UPDATE sites SET favourite = NOT favourite  WHERE owner_id=:owner_id AND siteusername=:displayUsername AND siteemail=:displayEmail AND sitepwd=:displayPwd ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":owner_id", $_SESSION["user_id"]);
    $stmt->bindParam(":displayUsername", $displayUsername);
    $stmt->bindParam(":displayEmail", $displayEmail);
    $stmt->bindParam(":displayPwd", $displayPwd);
    $stmt->execute();
}
function get_sites(object $pdo, $user_id)
{
    $query = "SELECT * FROM sites WHERE owner_id = :owner_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":owner_id", $user_id);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function get_fav_sites(object $pdo, $user_id)
{
    $query = "SELECT * FROM sites WHERE owner_id = :owner_id AND favourite = 1;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":owner_id", $user_id);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}