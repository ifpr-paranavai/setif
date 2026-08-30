<?php
/**
 * Home do site da SETIF.
 *
 * A raiz do site sempre serve a edição atual, cujo conteúdo fica na pasta do
 * respectivo ano. Para virar o ano, basta apontar este include para a nova
 * pasta e atualizar as rotas da edição no .htaccess.
 */
require_once __DIR__ . DIRECTORY_SEPARATOR . '2026' . DIRECTORY_SEPARATOR . 'index.php';
