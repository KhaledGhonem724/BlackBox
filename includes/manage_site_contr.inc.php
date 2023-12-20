<?php
declare(strict_types=1);
function is_pwd_empty(string $sitepwd): bool
{
    return empty($sitepwd);
}
function is_sitename_empty(string $sitename): bool
{
    return empty($sitename);
}
function is_user_empty(string $siteemail, string $siteusername): bool
{
    return empty($siteusername) && empty($siteemail);
}
function is_user_out(): bool
{
    return !isset($_SESSION["user_id"]);
}
////////////////////////////////////////////////////////////////////////////////////
function is_email_invalid(string $email): bool
{
    return (!filter_var($email, FILTER_VALIDATE_EMAIL));
}