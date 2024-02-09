<?php
include 'config.inc.php';
$arrResultado = my_query('SELECT * FROM users WHERE email = "' . $_POST['email'] . '"');
var_dump($arrResultado);
if(!$arrResultado){
    echo 'email incorreto';
} else if(password_verify($_POST['password'], $arrResultado[0]['password'])){
    echo 'Login com sucesso';
    header('Location: ../index.php');
    @session_start();
    $_SESSION['ultimoAcesso'] = $arrResultado[0]['dataUltimoLogin'];
    $_SESSION['id'] = $arrResultado[0]['id'];
    $_SESSION['username'] = $arrResultado[0]['username'];
    $_SESSION['email'] = $arrResultado[0]['email'];
    $_SESSION['nivel'] = $arrResultado[0]['nivel'];
    
    my_query('UPDATE users SET dataUltimoLogin = NOW() WHERE id = ' . $arrResultado[0]['id']);

} else {
    echo 'senha incorreta';
}


?>