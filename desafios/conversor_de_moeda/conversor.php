<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moeda</title>
</head>
<body>
        <main>
            <h1>
                Conversor de Moeda - R$ para USD
            </h1>
            <?php 
            // dolar 5,46

            $valorConverter = $_GET["quantia"];

            $conversao = $valorConverter / 5.46; // cotação fixa do dolar 22/08/2025

            echo "Seus <strong>R$$valorConverter</strong> foram convertidos em <strong>$", number_format($conversao, 2, ",", "."), "</strong>"; 
        ?>

        <p>
            Cotação atual (22/08/2025): <strong>R$ 5,46</strong>
        </p>
    </main>
</body>
</html>