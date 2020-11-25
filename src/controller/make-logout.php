<?php

/**
 * @author Bruno Dadario <brunof19d@gmail.com>
 */

require __DIR__ . '/../../config/config.php';

session_destroy();

header('Location: ../../index.php');
die();
