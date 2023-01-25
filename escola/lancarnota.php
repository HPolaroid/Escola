<?php
include_once("conexao.php");
?>
<?php
    $turma = $_POST['turma'];
    $consulta = mysqli_query($conexao, "SELECT aluno.cod_aluno CodA, aluno.nome_aluno, aluno.cpf, aluno.telefone, curso.nome_curso
                                        from aluno inner join turma
                                        on aluno.cod_turma = turma.cod_turma
                                        inner join curso
                                        on curso.cod_curso = turma.cod_curso
                                        WHERE turma.cod_turma like '%$turma%'");

    
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nome do Aluno</th>";
    echo "<th>Nota do Aluno</th>";
    echo "</tr>";
    
    while ($linha = mysqli_fetch_array($consulta)) {
        echo "<form action='lancarnota2.php' method='post'>";
        echo "<tr>";
        echo "<td>";
        echo  "<select name ='aluno[]'>";
        echo "<option  value ='" .$linha['CodA']. "' readonly>" .$linha['nome_aluno']. "</option>";
        echo "</select>";
        echo "</td>";
        echo "<td>";
        echo "<input type = 'text' name ='nota[]'>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table><br>";
    echo "<input type='submit' value='Lançar Nota'>";
    echo "</form>"
?>