<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteador de números</title>
</head>
<body>
    <header>
        <h1>
            Sorteador de números
        </h1>
    </header>
    <main>
        <p>
            Clique no botão abaixo para sortear um número de <strong>1</strong> a <strong>100</strong>
        </p>
        <?php               
            if (isset($_GET["sortear"])) {
                $numSorteado = rand(1, 100);
                
                echo "O número sorteado é: <strong>$numSorteado</strong>";
            }
        ?>
        <form action="" method="get">
            <input type="submit" name="sortear" value="Sortear">
        </form>
    </main>
</body>
</html>