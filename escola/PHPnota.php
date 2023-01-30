<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;1,100;1,200;1,300&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
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

    
    
    echo "<h1>BOLETIM</h1>";
    echo "<h3>____________________________________________</h3>";
    echo "<h1>ESCOLA RODRIGUES</h1>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>CNPJ</th>";
    echo "<th>Telefone da Instituição</th>";
    echo "</tr>";
    echo "<td>";
    echo "03.773.700/0001-07";
    echo "</td>";
    echo "<td>";
    echo "(31)4002-8922";
    echo "</td>";
    echo "</tr>";
    
    echo "<table border='1'>";
    echo "<h3>___________________________________________________________________________</h3>";
    echo "<br>";
    echo "<br>";
    echo "</tr>";
    
    while ($linha = mysqli_fetch_array($consulta)) {
        echo "<form action='lancarnota2.php' method='post'>";
        echo "<tr>";
        echo "<td>";
        echo "<b>Nome do Aluno</b>";
        echo "</td>";
        echo "<td>";
        echo $linha['nome_aluno'] ."<br>";
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "<b>CPF</b>";
        echo "</td>";
        echo "<td>";
        echo $linha['cpf'];
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "<b>Turma</b>";
        echo "</td>";
        echo "<td>";
        echo $linha['nome_turma'];
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "<b>Telefone</b>";
        echo "</td>";
        echo "<td>";
        echo $linha['telefone'];
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "<b>Nome do Curso</b>";
        echo "</td>";
        echo "<td>";
        echo $linha['nome_curso'];
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "<b>Nota do Aluno</b>";
        echo "</td>";
        echo "<td>";
        echo $linha['Nota'];
        echo "</td>";
        echo "</tr>";
        
    }
    echo "</table><br>";
    echo "<h3>___________________________________________________________________________</h3>";
    echo "</form>";
?>
</body>
</html>
