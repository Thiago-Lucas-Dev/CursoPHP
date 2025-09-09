<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de IMC</title>
</head>
<body>
    <header>
        <h1>Calculadora de IMC</h1>
    </header>
    <main>
        <form action="" method="post">
            <label for="peso">Qual seu peso (KG): </label>
            <input type="number" name="pesodigitado" id="pesodigitado">
            <label for="altura">Qual sua altura (M): </label>
            <input type="text" name="alturadigitada" id="alturadigitada">
            <input type="submit" value="Calcular">
        </form>
        <?php   
        
        if (!empty($_POST["pesodigitado"]) && (!empty($_POST["alturadigitada"]))) {

            $pesodigitado = $_POST["pesodigitado"];

            $alturadigitada = $_POST["alturadigitada"];

            $peso = str_replace(",", ".", $pesodigitado);
            $altura = str_replace(",", ".", $alturadigitada);      

            $alturaQuadrada = $altura * $altura;
            $imc = $peso / $alturaQuadrada;

            echo "Suas caracteristícas são:  <br><br>";
            echo "Seu peso: <strong>$peso</strong><br>";
            echo "Sua altura: <strong>$altura</strong><br><br>";

            echo "Seu IMC é de: " . "<strong>", round($imc, 2), "</strong>", "<br><br>";

            if ($imc < 18.5){
                echo "Sua classificação referente as suas características é: <strong>Abaixo do peso</strong>";
            } elseif ($imc >= 18.5 && $imc <= 24.9){
                echo "Sua classificação referente as suas características é: <strong>Peso normal</strong>";
            } elseif ($imc >= 25 && $imc <= 29.9){
                echo "Sua classificação referente as suas características é: <strong>Sobrepeso</strong>";
            } elseif ($imc >= 30 && $imc <= 34.9){
                echo "Sua classificação referente as suas características é: <strong>Obesidade grau 1</strong>";
            } elseif ($imc >= 35 && $Imc <= 39.9){
                echo "Sua classificação referente as suas características é: <strong>Obesidade grau 2</strong>";
            } elseif ($imc >= 40){
                echo "Sua classificação referente as suas características é: <strong>Obesidade grau 3 (mórbida)</strong>";
            }
        }
        ?>
    </main>
</body>
</html>