<?php

/**
 * @author Bruno Dadario <brunof19d@gmail.com>
 */

/**
 * Check that the received data exists in the database and that it is correct.
 * @param string $email Data $_POST received.
 * @param string $password Data $_POST received.
 * @return bool Return TRUE if password match or FALSE if password doesn't match.
 */
function login(string $email, string $password)
{
    $database = createConnectionDatabase();
    $sql = "SELECT * FROM login WHERE email = :email;";
    $statement = $database->prepare($sql);
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if ($result !== FALSE) {
        return password_verify($password, $result['password']);
    }

    return false;
}


