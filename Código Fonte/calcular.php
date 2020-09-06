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
        <?php
            require_once 'calculo.php';
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operacao = $_POST['operacao'];

    

                switch($operacao){
                    case 'soma' :
                        echo "<p>O Resultado é " . calcularSoma($num1, $num2) . "</p>";
                    break;
                    case 'subtracao' :
                        echo "<p>O Resultado é " . calcularSubtracao($num1, $num2) . "</p>";
                    break;
                    case 'divisao' :
                        echo "<p>O Resultado é " . calcularDivisao($num1, $num2) . "</p>";
                    break;
                    case 'multiplicacao' :
                        echo "<p>O Resultado é " . calcularMultiplicacao($num1, $num2) . "</p>";
                    break;
                    default :
                    echo "<p>ERRO!</p>";
                }

                //Função
                function calcularSoma($num1, $num2){
                    $resul = $num1 + $num2;
                    return($resul);
                }
                function calcularSubtracao($num1, $num2){
                    $resul = $num1 - $num2;
                    return($resul);
                }
                function calcularDivisao($num1, $num2){
                    $resul = $num1 / $num2;
                    return($resul);
                }
                function calcularMultiplicacao($num1, $num2){
                    $resul = $num1 * $num2;
                    return($resul);
                }
        ?>
        <a href="index.php"><button>Fazer outro Calculo</button></a>
        
    </div>
</body>
</html>