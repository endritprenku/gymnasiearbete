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
    echo ("<div style='background-repeat: no-repeat;
    background-position: 10px 50%;
    padding: 10px 10px 10px 10px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 0 1px 1px #fff inset;
    box-shadow: 0 1px 1px #fff inset;
    border: 1px solid maroon !important;
    color: #000;
    background: pink;
    display: table;
    margin: 0 auto;
    font-size: 15px;
    font-family: Tahoma;'><b>Goalie Konfigurationsfel:</b><br>Jag kunde inte ansluta till den angivna MySQL-servern. Var vänlig be administratören att granska felmeddelandeloggen för detaljer.</div>");
    die();
}
