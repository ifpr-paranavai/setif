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

define('LIB_IMG_2026', SITE_ROOT . DS . '2026' . DS . 'assets');
define('LIB_INCLUDES_2026', SITE_ROOT . DS . '2026' . DS . 'includes');

/**
 * SETIF 2026 - Configurações globais
 *
 * Arquivo de configuração com variáveis globais do evento
 * 
 * @author IFPR Paranavaí - Leandro Menoni
 * @version 1.1
 */

$evento = [
    'titulo' => 'SETIF 2026',
    'subtitulo' => 'Semana de Tecnologia da Informação do IFPR Campus Paranavaí (SETIF)',
    'slogan' => 'Organizada pelos Cursos de Engenharia de Software e Técnico em Informática',
    'data' => 'De 4 a 6 de novembro de 2026',
    'local' => 'IFPR Campus Paranavaí',
    'endereco' => 'Av. José Felipe Tequinha, 1400 - Jardim das Nações, Paranavaí - PR',
    'contatos' => [
        'eng-soft' => 'es.paranavai@ifpr.edu.br',
        'ti-info' => 'ti.info.paranavai@ifpr.edu.br',
        'telefone' => '(44) 3482-0110'
    ],
    'links' => [
        'atual' => '/setif/',
        'anais' => '/periodicos/index.php/setif',
        'ed_2025' => '/setif/2025/',
        'ed_2024' => '/setif/2024/',
        'ed_2023' => '/setif/2023/',
        'ed_2022' => '/setif/2022/',
        'equipe_editorial' => '/periodicos/index.php/setif/about/editorialTeam',
        'submissoes' => '/periodicos/index.php/setif/about/submissions',

        'inscricao' => 'https://docs.google.com/forms/d/e/1FAIpQLScYBIFxK5yzGD7g7Ahtm_ETHR0hiZlMk4MwjgUXFH0Lp2Qwtw/viewform'
    ],
    // Identificador do evento na Even3
    'even3_slug' => ''
];

?>