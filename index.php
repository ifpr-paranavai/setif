<?php
/**
 * Página inicial do site.
 *
 * Cada edição vive na própria pasta (2022/, 2023/, ...), então a raiz não
 * serve conteúdo: apenas encaminha o visitante para a edição atual, definida
 * por EDICAO_ATUAL no init.php. Ao virar o ano, basta trocar aquela constante.
 *
 * O redirecionamento é temporário (302) de propósito: o destino muda a cada
 * edição, então a raiz não deve ser indexada no lugar da pasta do ano.
 */
require_once __DIR__ . DIRECTORY_SEPARATOR . 'init.php';

header('Location: ' . $evento['links']['atual'], true, 302);
exit;
