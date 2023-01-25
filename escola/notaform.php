<?php
include_once("conexao.php");
?>
<?php
    $consulta = mysqli_query($conexao, "SELECT aluno.cod_aluno, aluno.nome_aluno, aluno.cpf, aluno.telefone, curso.nome_curso
                                        from aluno inner join turma
                                        on aluno.cod_turma = turma.cod_turma
                                        inner join curso
                                        on curso.cod_curso = turma.cod_curso");

    
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nome do Aluno</th>";
    echo "</tr>";
    
    echo "<form action='PHPnota.php' method='post'>";
    echo "<tr>";
    echo "<td>";
    echo  "<select name ='aluno'>";
    while ($linha = mysqli_fetch_array($consulta)) {
        echo "<option  value ='" .$linha['cod_aluno']. "' readonly>" .$linha['nome_aluno']. "</option>";
    }
        echo "</select>";
        echo "</td>";
        echo "</tr>";
    echo "</table><br>";
    echo "<input type='submit' value='Consultar Nota'>";
    echo "</form>"
?>