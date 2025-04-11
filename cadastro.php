<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aparelhos</title>
</head>
<body>
    <h1>Aparelhos cadastrados</h1>
       
   <?php
    //verificar se o form foi enviado via post

    if($_SERVER ['REQUEST_METHOD'] == 'POST'){

        if( empty($_POST['nomeaparelho']) ||
            empty($_POST['consumoemw']) ||
            empty($_POST['horasligado']) ||
            empty($_POST['diasligado']) ||
            empty($_POST['valorkwh'])){

                //mensagem de erro
                echo "<h3> Preencha todos os campos do formulário e envie novamente. </h3>";
                require_once ('cadastro.php');
            
                } else{        
                    //armazenar em variaveis locais os valores
                    // enviados no formulario

                    $nomeAparelho = $_POST['nomeaparelho'];
                    $consumoEmKW = $_POST['consumoemw'];
                    $horasLigado = $_POST['horasligado'];
                    $diasLigado = $_POST['diasligado'];
                    $valorKwH = $_POST['valorkwh'];

                    //Mostrando os dados 
                
                    echo"<h2> Dados do aparelho: </h2>";
                    echo"Nome do Aparelho: ". $nomeAparelho . " <br>";
                    echo"Consumo máximo em KW: ". $consumoEmKW . " <br>";
                    echo"Número de horas ligado por dia: ". $horasLigado . " <br>";
                    echo"Número de dias ligado por mês: ". $diasLigado . " <br>";
                    echo"Valor do kilowatt/hora:  R$ ". $valorKwH . " <br>";

                    //Cálculos

                    echo"<h3>Cálculos:</h3>";

                    $consDiarioWatts = $consumoEmKW/1000;
                    $consDiarioWatts *= $horasLigado; 
                    echo"Consumo diário do aparelho em watts: " . $consDiarioWatts . " <br>";

                    $consMensalWatts = $consDiarioWatts * $diasLigado; 
                    echo"Consumo mensal do aparelho em watts: " . $consMensalWatts . " <br>";

                    $consAparelhoRs = $consMensalWatts * $valorKwH; 
                    echo"Consumo do aparelho em R$: " . round($consAparelhoRs,2) . " <br>";

                    echo"<br>";

                    if ($consAparelhoRs < 5){
                        echo"O aparelho " . $nomeAparelho . " tem um baixo consumo de energia." . "<br>";
                            } elseif ($consAparelhoRs >= 5  && $consAparelhoRs < 10){
                        echo"O aparelho " . $nomeAparelho . " tem um consumo moderado de energia." . "<br>";
                            } else {
                        echo"O aparelho " . $nomeAparelho . " tem um alto consumo de energia." . "<br>";
                        }
                }      
        }

    ?>
    <p>
        <a href="index.php"> Voltar à Home</a>
    </p>
</body>
</html>