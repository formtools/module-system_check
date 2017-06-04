<?php

/**
 * This file gets included if the user has PDO installed on their system. It attempts to check the connection to
 * the database using PDO.
 */


function sc_check_pdo_connection($port)
{
    global $g_db_hostname, $g_db_name, $g_db_username, $g_db_password;

    try {
        $dsn = sprintf("mysql:host=%s;port=%s;dbname=%s;charset=utf8", $g_db_hostname, $port, $g_db_name);
        new PDO($dsn, $g_db_username, $g_db_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (PDOException $e) {
        return array("success" => false, "msg" => $e->getMessage(), "port" => $port);
    }

    return array("success" => true, "port" => $port);
}
