<?php
if (!defined('ENDRIT_CMS'))
{
    die('Sorry but you cannot access this file!');
}

try
{
    $dbh = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['db'] . ';charset=utf8', $db['user'], $db['pass']);
}

catch(PDOException $e)
{
    echo ("Vi kan inte ansluta till databasen!");
    die();
}

