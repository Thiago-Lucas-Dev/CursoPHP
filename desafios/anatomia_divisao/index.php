<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anatomia de uma Divisão</title>
</head>
<body>
    <header>
        <h1>
            Anatomia de uma divisão
        </h1>
    </header>
    <main>
        <h2>Digite os valores do <strong>Divisor</strong> e do <strong>Dividendo</strong>:</h2>
        <form action="" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="dividendo">
            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="divisor">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Resultado da Divisão</h2>
        <?php 

            if (isset($_GET["dividendo"]) && isset($_GET["divisor"])) {
                
                $dividendo = $_GET["dividendo"];
                $divisor = $_GET["divisor"];

                $resultadoDivisao = $dividendo / $divisor;

                $restoDivisao = $dividendo % $divisor;

                echo "Seu Dividendo é: <strong>$dividendo</strong> e seu Divisor é <strong>$divisor</strong>!<br><br>";

                echo "Resultado da divisão dos valores acima é de: <strong>$resultadoDivisao</strong><br><br>";

                echo "E o resto da divisão entre <strong>$dividendo</strong> e <strong>$dividendo</strong> é de: <strong>$restoDivisao</strong>";
        
            } else {
                echo "Digite algum valor nos campos acima!";
            }
        
        
        
        ?>
    </section>
</body>
</html>