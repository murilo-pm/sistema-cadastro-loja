<!-- conexão com o banco de dados -->
<?php

$utf8 = header("Content-Type: text/html; charset=utf-8");
$link = new mysqli('localhost', 'root', 'Pin7221', 'db_cadastro');
$link->set_charset('utf8');