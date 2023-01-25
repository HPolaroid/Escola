<?php
$servidor = "localhost";
$user = "root";
$password = "";
$dbname =  "escola_rodrigues";

$conexao = new mysqli($servidor,$user,$password,$dbname);
if($conexao -> connect_error){
    die("Falha na Conexão com o DB " + $conexao -> connect_error);
}
?>