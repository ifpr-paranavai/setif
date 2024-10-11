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
?>