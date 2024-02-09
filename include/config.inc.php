<?php 
@session_start();
global $arrConfig;

if($_SERVER["HTTP_HOST"] == 'web.colgaia.local' || $_SERVER["HTTP_HOST"] == 'localhost' ){
    error_reporting(E_ALL);
} else {
    error_reporting(0);
};  

$arrConfig['host'] = 'localhost';
$arrConfig['user'] = 'root';
$arrConfig['pass'] = '';
$arrConfig['db'] = 'backoffice_pi';

$arrConfig['isLoginKey'] = 'EqqGu+ya/7ojkou0EMsDpxzUwxOWKHb/KpYEjqCJ4pM=';

$arrConfig['url_site'] = 'http://' . $_SERVER["HTTP_HOST"] . '/tarefa_11-enzogrigorio';
$arrConfig['dir_site'] = '/Applications/XAMPP/xamppfiles/htdocs/tarefa_11-enzogrigorio'; 

$arrConfig['dir_uploads'] = $arrConfig['dir_site'] . '/uploads/';
$arrConfig['url_uploads'] = $arrConfig['url_site'] . '/uploads/';
$arrConfig['dir_img'] = $arrConfig['dir_site'] . '/images/';
$arrConfig['url_img'] = $arrConfig['url_site'] . '/images/';
$arrConfig['auth_imgType'] = ['image/jpeg', 'image/png', 'image/gif'];



// chamada de outros include
include_once $arrConfig['dir_site'].'/include/db.inc.php';
include_once $arrConfig['dir_site'].'/include/functions.inc.php';

/* include_once $arrConfig['dir_site'].'/include/functions.inc.php'; 
include_once $arrConfig['dir_site'].'/include/db.inc.php'; 
include_once $arrConfig['dir_site'].'/components/navbar.comp.php';
include_once $arrConfig['dir_site'].'/components/intro.comp.php';
include_once $arrConfig['dir_site'].'/components/about.comp.php';
include_once $arrConfig['dir_site'].'/components/curriculo.comp.php';
include_once $arrConfig['dir_site'].'/components/skills.comp.php';
include_once $arrConfig['dir_site'].'/components/clientes.comp.php';
include_once $arrConfig['dir_site'].'/components/projetos.comp.php';
include_once $arrConfig['dir_site'].'/components/testemunhos.comp.php';
include_once $arrConfig['dir_site'].'/components/footer.comp.php'; */
?>