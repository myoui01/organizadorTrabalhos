<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="style2.css">
    <script href="../script.js"></script>
</head>
<body>
    <div class="header">
    <a class="logo"><img src="../img/logo.png" height="100px"></a>
    </div>

    <div class=principal> 
        <h1 class="title">Calculadora \o/</h1>
        <form action="#" method="post">
            <p> Numero 1 </p> <br>
            <input type="text" name="numero" placeholder="Insira aqui..."> 

            <select name="operacao" id="operacao">
                <option value="soma">+</option>
                <option value="subtracao">-</option>
                <option value="multiplicacao">x</option>
                <option value="divisao">/</option>
            </select> 
            <br>
            <p> Numero 2 </p> <br>
            <input type="text" name="numero2" placeholder="Insira aqui..."> 
            <br>  <button class="btn">Calcular</button> <br>
        </form>
    
        <?php
    
        $num1 = $_POST['numero'] ?? 0;      
        $num2 = $_POST['numero2'] ?? 0;
        switch ($_POST['operacao']) {
            case 'soma':
                $resultado = $num1 + $num2;
                $mensagem = "$num1 + $num2 = $resultado";
                break;
            case 'subtracao':
                $resultado = $num1 - $num2;
                $mensagem = "$num1 - $num2 = $resultado";
                break;
            case 'multiplicacao':
                $resultado = $num1 * $num2;
                $mensagem = "$num1 x $num2 = $resultado";
            break;
            case 'divisao':
                $resultado = $num1 / $num2;
                $mensagem = "$num1 / $num2 = $resultado";
            break;
            default:
                $mensagem = "Nenhum valor calculado!";
        }
    
        echo '<p class="resultado">' . $mensagem . '</p>';
        ?>
        </div>

       
</body>
</html>
