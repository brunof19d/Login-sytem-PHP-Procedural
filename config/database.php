<?php

/**
 * @author Bruno Dadario <brunof19d@gmail.com>
 */

/**
 *  Creates a PDO instance representing a connection to a database.
 * @return PDO
 */
function createConnectionDatabase(): PDO
{
    $tableSql = "CREATE TABLE IF NOT EXISTS login (
        id integer PRIMARY KEY AUTOINCREMENT,
        email varchar(255) NOT NULL,
        password varchar(100) NOT NULL
    )";

    $databasePath = __DIR__ . '/../schema.sqlite';

    try {
        $database = new PDO('sqlite:' . $databasePath);
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $database->exec($tableSql);
        return $database;
    } catch (PDOException $exception) {
        echo $exception->getMessage();
        exit;
    }
}
