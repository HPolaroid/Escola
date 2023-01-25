<?php
include_once('conexao.php');
?>

<?php
if(isset($_POST)){
    $count = count($_POST['aluno']);
    $i = 0;

while ($i<$count){    
$nota = $_POST['nota'][$i];
$aluno = $_POST['aluno'][$i];

$update = mysqli_query($conexao, "        UPDATE nota
                                          SET Nota = '$nota'
                                          WHERE nota.Cod_aluno ='$aluno'")
                                          or die ("Erro ao tentar atualizar a nota!");
                                          
                                          $i++; 
                                        }
                                        echo "Nota lançada com Sucesso!";
                                    }
?>