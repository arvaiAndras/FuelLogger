<?php

const SESSION_LOGGED_IN = "is_logged_in";

/**
 * @return bool
 */
function isLoggedIn()
{
    return isset($_SESSION[SESSION_LOGGED_IN]) && $_SESSION[SESSION_LOGGED_IN] ? true : false;
}

function loginUser()
{
    $_SESSION[SESSION_LOGGED_IN] = true;
}

function logoutUser()
{
    $_SESSION[SESSION_LOGGED_IN] = false;
}