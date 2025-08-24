<?php
// init.php
// Ficheiro de inicialização de configurações gerais
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('SITE_ROOT', ROOT . DS . 'setif');
define('SITE_ROOT_ADMIN', SITE_ROOT . DS . 'admin');
# 2º alternativa
# define('SITE_ROOT',DS.'var'.DS.'www'.DS.'meu_site');
define('LIB_CONTROLLER', SITE_ROOT_ADMIN . DS . 'controller');
define('LIB_DAO', SITE_ROOT_ADMIN . DS . 'dao');
define('LIB_UTIL', SITE_ROOT_ADMIN . DS . 'utils');
define('LIB_MODEL', SITE_ROOT_ADMIN . DS . 'model');
define('LIB_INCLUDES', SITE_ROOT_ADMIN . DS . 'includes');
define('LIB_FOTOS', SITE_ROOT . DS . 'fotos');

define('LIB_IMG_2023', SITE_ROOT . DS . '2023' . DS . 'imagens');
define('LIB_INCLUDES_2023', SITE_ROOT . DS . '2023' . DS . 'includes');

define('LIB_IMG_2024', SITE_ROOT . DS . '2024' . DS . 'imagens');
define('LIB_INCLUDES_2024', SITE_ROOT . DS . '2024' . DS . 'includes');

define('LIB_IMG_2025', SITE_ROOT . DS . '2025' . DS . 'assets');
define('LIB_INCLUDES_2025', SITE_ROOT . DS . '2025' . DS . 'includes');

/**
 * SETIF 2025 - Configurações globais
 * 
 * Arquivo de configuração com variáveis globais do evento
 * 
 * @author IFPR Paranavaí - Pablo Henrique
 * @version 1.0
 */

$evento = [
    'titulo' => 'SETIF 2025',
    'subtitulo' => 'Semana da Tecnologia da Informação do IFPR Campus Paranavaí (SETIF)',
    'slogan' => 'Organizada pelos Cursos de Engenharia de Software e Técnico em Informática',
    'data' => 'De 5 a 7 de novembro de 2025',
    'local' => 'IFPR Campus Paranavaí',
    'endereco' => 'Av. José Felipe Tequinha, 1400 - Jardim das Nações, Paranavaí - PR',
    'contatos' => [
        'eng-soft' => 'es.paranavai@ifpr.edu.br',
        'ti-info' => 'ti.info.paranavai@ifpr.edu.br',
        'telefone' => '(44) 3482-0110'
    ]
];

?>