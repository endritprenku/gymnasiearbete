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
                        if (in_array($page, $allowed))
                        {
                            ob_start("html::callback");
                            include (Z . H . "/{$page}.php");
                            $contents = ob_get_contents();
                            ob_end_flush();
                        }
                    }
                    else
                    {
                        include Z . H . '/404.php';
                    }
                }
                else
                {
                    include Z . H . '/pages/index.php';
                }
            }
            else
            {
                include Z . H . '/pages/index.php';
                header('Location: ' . $config['hotelUrl'] . '/index');
            }
        }

        if (loggedIn())
        {
            switch ($page)
            {
                case "":
                header('Location: ' . $config['hotelUrl'] . '/tjanster');
                break;
            }
        }

        if (!loggedIn())
        {
            switch ($page)
            {
                case "":
                header('Location: ' . $config['hotelUrl'] . '/index');
                break;
                default:
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