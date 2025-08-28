<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>
            Analise de salário minímo:
        </h1>
    </header>
    <main>
        <h2>Informe seu salário:</h2>
        <form action="" method="post">
            <label for="salario">Digite seu salário: (R$)</label>
            <input type="number" name="salario" id="salario">
            <input type="submit" value="Calcular">
        </form>
        <p>Considerando o salário minimo de: <strong>R$1518,00</strong>!</p>
    </main>
    <?php   
        if (isset($_POST["salario"])){
            $salario = $_POST["salario"];
            $salarioMinimo = 1518;

            $analiseSalarial = intval($salario / $salarioMinimo);
            $restoSalarial = $salario % $salarioMinimo;
    
            echo "
            <section>
            <h1>
                Resultado da Analise:
            </h1>
            
            Seu salário é de: <strong>R$$salario</strong><br><br>

            Um total de <strong>$analiseSalarial</strong> salários minímos + <strong>R$$restoSalarial</strong>
            </section>
            ";
        }
    ?>
</body>
</html>