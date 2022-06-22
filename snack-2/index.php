<?php

function isValidName($name)
{
    $pattern = '/^[A-Za-z\x{00C0}-\x{00FF}][A-Za-z\x{00C0}-\x{00FF}\'\-]+([\ A-Za-z\x{00C0}-\x{00FF}][A-Za-z\x{00C0}-\x{00FF}\'\-]+)*/u';
    $len = strlen($name);

    if ($len > 3 && preg_match($pattern, $name)) {
        return true;
    }

    return false;
}

function isValidEmail($email)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isValidAge($age)
{
    return $age > 0;
}

$name = $_GET['name'];
$email = $_GET['mail'];
$age = $_GET['age'];

if (
    isValidName($name)
    && isValidEmail($email)
    && isValidAge($age)
) {
    echo 'Accesso riuscito';
} else {
    echo 'Accesso negato';
}
