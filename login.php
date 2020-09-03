<?php

# Configurações Gerais
require_once 'config.php';
$msg = get_mensagem();

try {
    if (isset($_POST['login_user'])) {
        $usuario = filter_var($_POST['email_user'], FILTER_VALIDATE_EMAIL);
        $senha = filter_var($_POST['password'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

        if ($usuario === false) {
            throw new Exception('Usuário inválido!');
        }

        if (!$senha) {
            throw new Exception('Senha inválida!');
        }

        login_usuario($usuario, $senha);
    }
} catch (Exception $e) {
    set_mensagem($e->getMessage(), 'alert-danger');
}
