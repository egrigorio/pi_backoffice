<?php
include 'config.inc.php';
$arrResultado = my_query('SELECT * FROM users WHERE email = "' . $_POST['email'] . '"');
var_dump($arrResultado);
if(!$arrResultado){
    echo 'email incorreto';
} else if(password_verify($_POST['password'], $arrResultado[0]['password'])){
    echo 'Login com sucesso';
    header('Location: ../index.html');
    @session_start();
    $_SESSION['id'] = $arrResultado[0]['id'];
} else {
    echo 'senha incorreta';
}


?>