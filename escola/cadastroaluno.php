<?php
include_once('conexao.php');
?>

<?php
$aluno = $_POST["aluno"];
$cpf = $_POST["cpf"];
$telefone = $_POST["Telefone"];
$turma = $_POST["turma"];

$inserir = mysqli_query($conexao, "INSERT INTO aluno (Nome_aluno, CPF, Telefone, Cod_turma)
                                   Values('$aluno', '$cpf', '$telefone', '$turma');") or die ("Erro a cadastrar o Aluno!");
                                   echo "Aluno Cadastrado com Sucesso!";
?>