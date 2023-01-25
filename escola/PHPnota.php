<?php
include_once("conexao.php");
?>
<?php
    $aluno = $_POST['aluno'];
    $consulta = mysqli_query($conexao, "SELECT nota.Nota, aluno.cod_aluno, turma.nome_turma, aluno.nome_aluno, aluno.cpf, aluno.telefone, curso.nome_curso
                                        from nota inner join aluno
                                        on nota.cod_aluno = aluno.cod_aluno 
                                        inner join turma
                                        on aluno.cod_turma = turma.cod_turma
                                        inner join curso
                                        on curso.cod_curso = turma.cod_curso
                                        WHERE aluno.cod_aluno like '%$aluno%'");

    
    

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nome da Instituição</th>";
    echo "<th>CNPJ</th>";
    echo "<th>Telefone da Instituição</th>";
    echo "</tr>";
    echo "<td>";
    echo "Escola Rodrigues";
    echo "</td>";
    echo "<td>";
    echo "03.773.700/0001-07";
    echo "</td>";
    echo "<td>";
    echo "(31)4002-8922";
    echo "</td>";
    echo "</tr>";

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nome do Aluno</th>";
    echo "<th>CPF</th>";
    echo "<th>Turma</th>";
    echo "<th>Telefone</th>";
    echo "<th>Nome do Curso</th>";
    echo "<th>Nota do Aluno</th>";
    echo "</tr>";
    
    while ($linha = mysqli_fetch_array($consulta)) {
        echo "<form action='lancarnota2.php' method='post'>";
        echo "<tr>";
        echo "<td>";
        echo $linha['nome_aluno'];
        echo "</td>";
        echo "<td>";
        echo $linha['cpf'];
        echo "</td>";
        echo "<td>";
        echo $linha['nome_turma'];
        echo "</td>";
        echo "<td>";
        echo $linha['telefone'];
        echo "</td>";
        echo "<td>";
        echo $linha['nome_curso'];
        echo "</td>";
        echo "<td>";
        echo $linha['Nota'];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table><br>";
    echo "<input type='submit' value='Lançar Nota'>";
    echo "</form>"
?>