<?php
if (!defined('ENDRIT_CMS'))
{
    die('Sorry but you cannot access this file!');
}

function filter($data)
{
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

function filterInpute($data)
{
    $filter = new Filter();
    $allowed_protocols = array(
        '',
        '',
        'mailto'
    );
    $allowed_tags = array(
        'a',
        'i',
        'b',
        'em',
        'span',
        'strong',
        'ul',
        'ol',
        'li',
        'table',
        'tr',
        'td',
        'thead',
        'th',
        'tbody'
    );
    $filter->addAllowedProtocols($allowed_protocols);
    $filter->addAllowedTags($allowed_tags);
    $filtered_string = $filter->xss($data);
}

function loggedIn()
{
    if (isset($_SESSION['id']))
    {
        return true;
    }
    else
    {
        return false;
    }
}
