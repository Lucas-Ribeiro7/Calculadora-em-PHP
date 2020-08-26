<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="borda">
        <form action="calcular.php" method="POST">
            <label>Número 1:</label>
            <input type="number" name="num1">
            -
            <label>Número 2:</label>
            <input type="number" name="num2">
            <br>
            <br>
            <label><strong>Escolha a Operação:</strong></label>
            <input type="radio" name="operacao" value="soma">
            <label for="soma">SOMÁTORIO</label>
            <input type="radio" name="operacao" value="subtracao">
            <label for="subtracao">SUBTRAIR</label>
            <input type="radio" name="operacao" value="divisao">
            <label for="divisao">DIVISÃO</label>
            <input type="radio" name="operacao" value="multiplicacao">
            <label for="multiplicacao">MULPLICAÇÃO</label>
            <br>
            <br>
            <input type="submit" value="Calcular">
        </form>
    </div>
</body>
</html>