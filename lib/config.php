<?php

define('SITE_URL', 'http://localhost/loginPHP_PROCEDURAL/');

/** Configurações de Banco de Dados */
define('DB_HOST', 'localhost');
define('DB_NAME', 'caeland');
define('DB_USER', 'root');
define('DB_PWD', '');


require_once "lib/database.php";
require_once "lib/helper.php";
require_once "lib/usuario.php";

/** Habilita o uso de sessões na nossa aplicação */
if (!session_id()) {
    session_start();
}
