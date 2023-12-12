<?php
declare(strict_types=1);
function is_username_wrong(bool|array $result): bool
{
    if (!$result) {
        return true;
    } else {
        return false;
    }
}
function is_password_wrong(string $pwd, string $userpwd): bool
{
    if ($userpwd != $pwd) {
        return true;
    } else {
        return false;
    }
}
function is_input_empty(string $username, string $pwd): bool
{
    return (empty($username) || empty($pwd));
}