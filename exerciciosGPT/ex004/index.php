<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercícios</title>
</head>
<body>
    <header>
        <h1>
            Exercícios de Treino de PHP - GPT
        </h1>
    </header>
    <section id="ex01">
        <h2>
            Qual fase da vida você está ?
        </h2>
        <form action="" method="post">
            <label for="age">Qual sua idade?</label>
            <input type="number" name="idade" id="idade">
            <input type="submit" value="Enviar">
        </form>
        <?php 
        if (!empty($_POST["idade"])){
            
            $idade = $_POST["idade"];

            if ($idade <= 12){
                echo "<br>Você é uma criança!";
            } elseif ($idade > 12 && $idade <= 17){
                echo "<br>Você é um adolescente!";
            } elseif ($idade >= 18 && $idade <= 59){
                echo "<br>Você é um adulto! Precisa pagar contas!";
            } elseif ($idade >= 60 && $idade < 100){
                echo "<br>Você é idoso já! Vida passou rápido!";
            } elseif ($idade >= 100){
                echo "<br>Se levanta as maõs pro céu, Deus puxa!";
            }
        }
        ?>

    </section>
    <br><br>
    <section id="ex02">
        <h2>
            Seletor de dia da semana
        </h2>
        <form action="" method="post">
            <label for="numero">Digite um número de 1 a 7</label>
            <input type="number" name="numdia" id="numdia">
            <input type="submit" value="Enviar ">
        </form>
        <?php 
        
        if (!empty($_POST["numdia"])){

            $dia = $_POST["numdia"];

            switch ($dia){
                case "1":
                    echo "Domingo";
                    break;
                case "2":
                    echo "Segunda";
                    break;
                case "3":
                    echo "Terça";
                    break;
                case "4":
                    echo "Quarta";
                    break;
                case "5":
                    echo "Quinta";
                    break;
                case "6":
                    echo "Sexta";
                    break;
                case "7":
                    echo "Sábado";
                    break;
                default:
                    echo "Digite um número válido!";
                    break;
            }
        }
        ?>
    </section>
    <br><br>
    <section id="ex003">
        <h2>
            Tabuada
        </h2>
        <form action="" method="post">
            <label for="numero">Digite um número</label>
            <input type="number" name="numtabuada" id="numtabuada">
            <input type="submit" value="Enviar">
        </form>
        <?php 

        if (!empty($_POST["numtabuada"])){
            
            $tabuada = $_POST["numtabuada"];


            for ($i = 0; $i < 11; $i++){
                $resultado = $tabuada * $i;
                echo "<br>$tabuada x $i = $resultado<br>";
            }
        } else {
            echo "Digite um número!";
        }
        ?>
    </section>
    <br><br>
    <section id="ex004">


    </section>
</body>
</html>