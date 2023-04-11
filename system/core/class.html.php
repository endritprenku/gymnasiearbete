<?php
if (!defined('ENDRIT_CMS'))
{
    die('Sorry but you cannot access this file!');
}

class html
{

    public static function page()
    {
        global $dbh, $config;
        if (defined('PHP_VERSION') && PHP_VERSION >= 5.6)
        {
            true;
        }
        else
        {
            echo 'PHP version is lower then PHP 5.6 your PHP version is ' . PHP_VERSION . '';
            exit;
        }
        $page = '';
        if (isset($_GET['url']))
        {
            $page = filter($_GET['url']);
            $allowed = array();
            foreach (new DirectoryIterator(Z . H) as $file)
            {
                $file = explode('.php', $file);
                $allowed[] = $file[0];
            }
            if ($page)
            {
                if (!$config['maintenance'] == true)
                {
                    $fileExists = Z . H . "/{$page}.php";
                    if (file_exists($fileExists))
                    {
                        $content = in_array($page, $allowed) ? include (Z . H . "/{$page}.php") : '';
                    }
                    else
                    {
                        include Z . H . '/404.php';
                    }
                }
            }
            else
            {
                header('Location: ' . $config['url'] . '/index');
            }
        }

        if(loggedIn()){ 
            switch($page)
            {
                case "":
                header('Location: '.$config['url'].'/index');
                break;
                default:
                //Nothing
                break;
            }
        }
        if(!loggedIn()){ 
            switch($page)
            {
                case "":
                header('Location: '.$config['url'].'/index');
                break;
                default:
                //Nothing
                break;
            }
        }
    }

    public static function errorMessage($message)
    {
        echo '<script>window.onload = function() { errorMessage("' . $message . '"); };</script>';
    }

    public static function successMessage($message)
    {
        echo '<script>window.onload = function() { successMessage("' . $message . '"); };</script>';
    }
}
