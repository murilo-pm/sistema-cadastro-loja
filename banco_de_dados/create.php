<!-- processará os dados preenchidos no formulário -->
<?php
include_once 'conexao.php';

$nome       = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email      = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone   = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT); /* só deixa passar os sinais: mais e menos */

$querySelect = $link->query("select email from tb_clientes");
$array_emails = [];

