<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteador de Números 2.0</title>
</head>

<body>
    <header>
        <h1>
            Sorteador de Números 2.0
        </h1>
    </header>
    <main>
        Escolha o <strong>intervalo</strong> de números que você gostaria de sortear

        <form action="" method="get">

            <label for="intervalo1">Digite o menor número do intervalo (1°):</label>
            <input type="text" name="intervalo1" id=""><br><br>

            <label for="intervalo2">Digite o maior número do intervalo (2°):</label>
            <input type="text" name="intervalo2" id=""><br><br>
        <?php

        if (isset($_GET["intervalo1"]) && isset($_GET["intervalo2"])) {
            $intervalo1 = $_GET["intervalo1"];
            $intervalo2 = $_GET["intervalo2"];

            if ((!is_numeric($intervalo1)) || (!is_numeric($intervalo2))){
                echo "Digite um <strong>número válido</strong> por favor!";

            } elseif ($intervalo2 < $intervalo1) {
                echo "O número do <strong>2° intervalo</strong> precisa ser maior que o <strong>1° intervalo</strong>";
            } else {
                // echo "n1: $intervalo1 <br>";
                // echo "n2: $intervalo2";

                $numSorteado = rand($intervalo1, $intervalo2);

                echo "Os números sorteados serão de <strong>$intervalo1</strong> a <strong>$intervalo2</strong>:<br><br>";

                echo "Número sorteador: <strong>$numSorteado</strong>";
            
            }
        }
        ?>

            <input type="submit" value="Sortear">

        </form>
    </main>
</body>

</html>