<?php

$alunos = ['Miguel Silva', 'Diogo Chiu' , 'Nelson Mendes', 'David Neves' , 'Sérgio Gaspar' , 'Diogo Lopes', 'Luis Miguel', 'João Pedro', 'Maria Dias', 'Manuel Silva'];
$notas = [60, 80, 70, 20, 30, 80, 40, 60, 30, 90];

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos & Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h2>Alunos & Notas</h2>
    <table class="table table-dark table-striped" id="tabelaNotas">
        <thead>
            <tr>
                <th>Alunos</th>
                <th>Notas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($x = 0; $x < count($alunos); $x++) { 
                echo "<tr>";
                echo "<td>" . $alunos[$x] . "</td>";
                echo "<td class='nota'>" . $notas[$x] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <script>
       
    // Seleciona todas as células de nota
    const notas = document.querySelectorAll('.nota');

    // Aplica a cor conforme a nota
    notas.forEach(celula => {
        const nota = parseInt(celula.textContent.trim()); // Remover espaços em branco

        // Verifique o resultado no console para depuração
        console.log(`Nota: ${nota}`);

        if (!isNaN(nota)) {
            if (nota < 60) {
                celula.style.backgroundColor = 'red';
            } else {
                celula.style.backgroundColor = 'green';
            }
        }
    });
    </script>
    
</body>

</html>