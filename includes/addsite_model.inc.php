<?php
declare(strict_types=1);
require_once "dbh.inc.php";
function add_site(object $pdo, string $sitename, string $siteusername, string $siteemail, string $sitepwd)
{
    $query = "INSERT INTO sites (sitename, siteusername, siteemail, sitepwd, owner_id) VALUES
            (:sitename, :siteusername, :siteemail, :sitepwd, :owner_id);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":sitename", $sitename);
    $stmt->bindParam(":siteusername", $siteusername);
    $stmt->bindParam(":siteemail", $siteemail);
    $stmt->bindParam(":sitepwd", $sitepwd);
    $stmt->bindParam(":owner_id", $_SESSION["user_id"]);
    $stmt->execute();
}