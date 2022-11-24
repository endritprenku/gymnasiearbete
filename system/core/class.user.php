<?php
if (!defined('ENDRIT_CMS'))
{
    die('Sorry but you cannot access this file!');
}

class User
{
    public static function checkUser($password, $passwordDb, $username)
    {
        global $dbh;
        if (substr($passwordDb, 0, 1) == "$")
        {
            if (password_verify($password, $passwordDb))
            {
                return true;
            }
            return false;
        }
        else
        {
            $passwordBcrypt = self::hashed($password);
            if (md5($password) == $passwordDb)
            {
                $stmt = $dbh->prepare("UPDATE users SET password = :password WHERE username = :username");
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':password', $passwordBcrypt);
                $stmt->execute();
                return true;
            }
            return false;
        }
    }

    public static function hashed($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public static function login()
    {
        global $dbh, $config;
        if (isset($_POST['login']))
        {
            if (!empty($_POST['username']))
            {
                if (!empty($_POST['password']))
                {
                    $stmt = $dbh->prepare("SELECT id, password, username FROM users WHERE username = :username");
                    $stmt->bindParam(':username', $_POST['username']);
                    $stmt->execute();
                    if ($stmt->RowCount() == 1)
                    {
                        $row = $stmt->fetch();
                        if (self::checkUser($_POST['password'], $row['password'], $row['username']))
                        {
                            $_SESSION['id'] = $row['id'];
                            header('Location: ' . $config['hotelUrl'] . '/hem');
                        }
                    }
                    return html::error('Ditt lösenord är felaktigt.');
                }
                return html::error('Detta användarnamn existrerar inte.');
            }
            return html::error('Du månste ange ett lösenord!');
        }
        return html::error('Ange ett användarnamn!');
	}
}