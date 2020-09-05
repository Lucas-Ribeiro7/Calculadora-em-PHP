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

                //Criação do Objeto Calculo
                $calculo = new calculo($num1, $num2);

                switch($operacao){
                    case 'soma' :
                    
                    break;
                    case 'subtracao' :

                    break;
                    case 'divisao' :

                    break;
                    case 'multiplicacao' :

                    break;
                }

        ?>
    </div>
</body>
</html>