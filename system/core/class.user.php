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

    public static function userData($key)
    {
        global $dbh;
        if (loggedIn())
        {
            $stmt = $dbh->prepare("SELECT " . $key . " FROM users WHERE id = :id");
            $stmt->bindParam(':id', $_SESSION['id']);
            $stmt->execute();
            $row = $stmt->fetch();
            return filter($row[$key]);
        }
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
                    $stmt = $dbh->prepare("SELECT id, username, password FROM users WHERE username = :username");
                    $stmt->bindParam(':username', $_POST['username']);
                    $stmt->execute();
                    if ($stmt->RowCount() == 1)
                    {
                        $row = $stmt->fetch();
                        if (self::checkUser($_POST['password'], $row['password'], $row['username']))
                        {
                            if (!$config['maintenance'] == true)
                            {
                                $userUpdateIp = $dbh->prepare("UPDATE users SET last_ip = :userip WHERE id = :id");
                                $userUpdateIp->bindParam(':id', $row['id']);
                                $userUpdateIp->bindParam(':userip', userIp());
                                $userUpdateIp->execute();
                                $_SESSION['id'] = $row['id'];
                                header('Location: ' . $config['hotelUrl'] . '/tjanster');
                            }
                        }
                        return html::error('Ditt lösenord är felaktigt.');
                    }
                    return html::error('Detta användarnamn finns inte.');
                }
                return html::error('Du månste ange ett lösenord!');
            }
            return html::error('Ange ett användarnamn!');
        }
    }
}