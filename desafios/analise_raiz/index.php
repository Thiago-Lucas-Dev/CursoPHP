<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analise de Raízes Quadradas e Cubicas</title>
</head>
<body>
    <header>
        <h1>
            Analise de Raízes Quadradas e Cubicas
        </h1>
    </header>
    <main>
        <h2>
            Escolha um número
        </h2>
        <form action="" method="post">
            <label for="numero">Número:</label>
            <input type="number" name="numdigitado" id="numdigitado">
            <input type="submit" value="Calcular Raízes">
        </form>
        <?php 
        
        if (isset($_POST["numdigitado"])) {
            $numero = $_POST["numdigitado"];

            for ($valormulti = 1; $valormulti <= $numero; $valormulti++) {

                $quadrado = $valormulti * $valormulti;

                echo "$quadrado<br>";
                
            }

            
        
        }

            
        
        
        
        
        
        
        ?>
    </main>
</body>
</html>