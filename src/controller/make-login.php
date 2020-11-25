<?php

/**
 * @author Bruno Dadario <brunof19d@gmail.com>
 */

try {
    if (array_key_exists('login', $_POST)) {

        // $_POST Email
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        if ($email === FALSE) throw new Exception('E-mail invalid');

        // $_POST Password
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
        if ($password === FALSE) throw new Exception('Password invalid');

        // Verify Data for login
        $login = login($email, $password);
        if ($login === FALSE) throw new Exception('E-mail or password invalid');

        $_SESSION['login'] = sha1(rand(1, 200));

        header("Location: template/logged.php");
        die();
    }
} catch (Exception $exception) {
    echo $exception->getMessage();
    die();
}
