<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antecessor e Sucessor</title>
</head>
<body>
    <header>
        <h1>
            Antecessor e Sucessor
        </h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"];
            
            echo "O número que você digitou foi: <strong>$numero</strong><p>";

            $sucessor = $numero + 1;
            $antecessor = $numero -1;

            echo "O antecessor de $numero é: <strong>$antecessor</strong> <p>";

            echo "E o sucessor de $numero é: <strong>$sucessor</strong>";

        ?>

        <p>
            <a href="javascript:history.go(-1)">Escolha outro número</a>
        </p>
    </main>
</body>
</html>