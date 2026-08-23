<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';
session_start();

// Redireciona o usuário direto para o formulário de inscrição (link definido em init.php)
header("Location: " . $evento['links']['inscricao']);
exit();
