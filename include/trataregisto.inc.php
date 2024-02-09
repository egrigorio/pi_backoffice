<?php

include 'config.inc.php';

// criar conta pelo que foi enviado no form os campos são 'nome', 'email', 'password' não tem campos de confirmação de password, a tabela é users
$nome = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST['password'];

// verificar se o email já existe na base de dados
$arrResultado = my_query('SELECT * FROM users WHERE email = "' . $email . '"');
if (count($arrResultado) > 0) {
  header('Location: ../pages/sign-up.php?erro=emailRepetido');
  exit;
}

// validar se o email é válido
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header('Location: ../pages/sign-up.php?erro=emailInvalido');
  exit;
}

// hash da password
$password = password_hash($password, PASSWORD_DEFAULT);

// inserir na base de dados
my_query('INSERT INTO users (username, email, password, nivel) VALUES ("' . $nome . '" ,"' . $email . '","' . $password . '", 0)');

// id do utilizador que acabou de ser inserido
header('Location: ../pages/sign-in.php');




?>