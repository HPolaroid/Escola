<?php
include_once('conexao.php');
?>

<?php
$curso = $_POST["curso"];

$inserir = mysqli_query($conexao, "INSERT INTO curso(Nome_curso)
                                   Values('$curso');") or die ("Erro a cadastrar o Curso!");
                                   echo "Curso Cadastrado com Sucesso!";
?>