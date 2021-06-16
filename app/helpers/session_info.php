<?php

session_start();

define('IS_LOGGED_IN', 'IS_LOGGED_IN_SESSION');

function create_session_info()
{
    set_is_loggedin(true);
}
function delete_session_info()
{
    session_unset(IS_LOGGED_IN);
    session_destroy();
    set_is_loggedin(false);
}

function set_is_loggedin($is_loggedin)
{
    if ($is_loggedin) {
        $_SESSION[IS_LOGGED_IN] = 'true';
    } else {
        session_unset($_SESSION[IS_LOGGED_IN]);
    }
}

function isLoggedIn()
{
    return isset($_SESSION[IS_LOGGED_IN]);
}