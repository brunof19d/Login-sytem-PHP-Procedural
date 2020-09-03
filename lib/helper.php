<?php

/**
 * Corrige o caminho dos links de navegação do site
 * @param string $pagina    Página que a URL deve ser corrigida
 * @return string
 */
function get_url(string $pagina)
{
    return SITE_URL . $pagina;
}



/**
 * Configura a mensagem de erro ou de sucesso a ser exibida pela aplicação
 * @param string $msg       Mensagem a ser exibida pela aplicação
 * @param string $classe    Classe CSS a ser aplicada no elemento HTML da mensagem
 * @param string $url       URL de redirecionamento (Por padrão redireciona para a página atual)
 * @param string $id        ID da mensagem na Sessão
 * @return void
 */
function set_mensagem(string $msg, string $classe, string $url = '', string $id = 'msg')
{

    $id = 'msg';

    $_SESSION[$id] = array(
        'mensagem' => $msg,
        'classe' => $classe
    );

    $url = $url ? $url : $_SERVER['REQUEST_URI'];

    header("Location: $url");
    exit();
}

/**
 * Retorna a mensagem guardada na sessão da aplicação
 * @param string $id    ID da chave na Sessão que contém a mensagem
 * @return array|null
 */
function get_mensagem(string $id = 'msg')
{
    $msg = $_SESSION[$id] ?? null;
    unset($_SESSION[$id]); // remove o dado da sessão

    return $msg;
}