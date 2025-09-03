<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de Notas - GPT</title>
</head>

<body>
    <header>
        <h1>Sistema de Notas</h1>
    </header>
    <main>
        <form action="" method="post">
            <label for="notalauno">Insira a nota do aluno: </label>
            <input type="number" name="nota" id="nota">
            <input type="submit" value="Enviar">
    </main>
    <section>

        <?php

        $nota = $_POST["nota"];

        if (isset($_POST["nota"])) {
            if ($nota >= 7){
                echo "Aprovado";
            }

            elseif ($nota >= 4 && $nota <= 7) {
                echo "Recuperação";
            }

            elseif ($nota <= 4){
                echo "Reprovado";
            }
        
        }

        ?>
    </section>
</body>

</html>