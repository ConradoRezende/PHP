<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aparelhos Eletrônicos</title>
</head>
<body>
    <h1>Cadastro de Aparelhos Eletrônicos</h1>

    <form action="cadastro.php" method="post">

    <p>
    <input type="text" name="nomeaparelho" placeholder="Nome do aparelho">
    </p> 

    <p>
    <input type="number" name="consumoemw" placeholder="Consumo máximo em watts" min="0" >
    </p>

    <p>
    <input type="number" name="horasligado" placeholder="Nº horas ligado por dia" min="0">
    </p>

    <p>
    <input type="number" name="diasligado" placeholder="Nº dias ligado por mês" min="0">
    </p>

    <p>
    <input type="number" name="valorkwh" placeholder="Valor do kilowatt por hora" step="0.01" min="0">
    </p>

    <p>
    <button type="submit"> Cadastrar </button>
    </p>

</form>
    



</body>
</html>