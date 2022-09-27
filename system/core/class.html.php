<?php
if (!defined('ENDRIT_CMS'))
{
    die('Sorry but you cannot access this file!');
}

class html
{

    public static function page()
    {
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
            }
        }
    }
}