<?php

function is_email(string $email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function is_password(string $password)
{

    if (mb_strlen($password) >= 8 && mb_strlen($password) <= 16) {
        return True;
    }
    else {
        return False;
    }

}