<?php
include_once('conexao.php');
?>

<?php
$turma = $_POST['turma'];
$curso = $_POST['curso'];

$inserir = mysqli_query($conexao, "INSERT INTO turma (Nome_turma, Cod_curso)
                                   Values('$turma', '$curso');") or die ("Erro a cadastrar o Turma!");
                                   echo "Turma Cadastrada com Sucesso!";
?>