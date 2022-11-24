<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="style2.css">
    <script href="../script.js"></script>
</head>
<body>

    <div class="header">
    <a class="logo"><img src="../img/logo.png" height="100px"></a>
    </div>

    <div class=principal> 
    <p class="text">Conversor de sistemas númericos \o/</p>
    <form action="#" method="post">
        <input type="text" name="numero" placeholder="Insira aqui..."> 
        <select name="conversao" id="conversao">
            <option value="decimal-binario">Decimal > Binário</option>
            <option value="binario-decimal">Binário > Decimal</option>
            <option value="octal-decimal">Octal > Decimal</option>
            <option value="decimal-octal">Decimal > Octal</option>
            <option value="hexadecimal-decimal">Hexadecimal > Decimal</option>
            <option value="decimal-hexadecimal">Decimal > Hexadecimal</option>
            <option value="hexadecimal-binario">Decimal > Hexadecimal</option>
        </select>
        <br>  <button class="btn">Calcular</button> <br>
    </form>

    <?php

    $num = $_POST['numero'] ?? 0;
    switch ($_POST['conversao']) {
        case 'decimal-binario':
            $resultado = decbin($num);
            $mensagem = "$num = $resultado";
            break;
        case 'binario-decimal':
            $resultado = bindec($num);
            $mensagem = "$num = $resultado";
            break;
        case 'octal-decimal':
            $resultado = octdec($num);
            $mensagem = "$num = $resultado";
        break;
        case 'decimal-octal':
            $resultado = decoct($num);
            $mensagem = "$num = $resultado";
        break;
        case 'decimal-hexadecimal':
            $resultado = hexdec($num);
            $mensagem = "$num = $resultado";
        break;
        case 'decimal-hexadecimal':
            $resultado = dechex($num);
            $mensagem = "$num = $resultado";
        break;
        case 'hexadecimal-binario':
            $resultado = hex2bin($num);
            $mensagem = "$num = $resultado";
        break;
        default:
            $mensagem = "Nenhum valor calculado!";
    }

    echo "<p>$mensagem</p>";
    ?>
    </div>

    <div class="rodape">
    <p class="text">Operações com binários</p>
    <form action="#" method="post">
            <input type="number" name="n1" placeholder="Insira aqui..."> <br>
            <input type="number" name="n2" placeholder="Insira aqui...">
            <select name="operacao" id="operacao"> <br>
                <option value="soma">Soma</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
            <br>   <button class="btn">Calcular</button> <br>
    </form>

    <?php
       
    $n1 = $_POST['n1'] ?? 0;
    $n2 = $_POST['n2'] ?? 0;

    if (preg_match('~^[01]+$~', $n1) AND preg_match('~^[01]+$~', $n2)) { 
        $n1 = bindec($n1);
        $n2 = bindec($n2);
    }

    switch ($_POST['operacao']) {
        case 'soma':
            $resultado = $n1 + $n2;
            $resultado = decbin($resultado);
            $resultado_decimal = bindec($resultado);
            $mensagem = "$n1+$n2 =  $resultado_decimal <br> $resultado";
        break;
        case 'subtracao':
            $resultado = $n1 - $n2;
            $resultado = decbin($resultado);
            $resultado_decimal = bindec($resultado);
            $mensagem = "$n1-$n2 = $resultado_decimal <br> $resultado";
        break;
        case 'multiplicacao':
            $resultado = $n1 * $n2;
            $resultado = decbin($resultado);
            $resultado_decimal = bindec($resultado);
            $mensagem = "$n1/$n2 = $resultado_decimal <br> $resultado";
        break;
        case 'divisao':
            $resultado = $n1/$n2;
            $resultado = decbin($resultado);
            $resultado_decimal = bindec($resultado);
            $mensagem = "$n1/$n2 = $resultado_decimal <br> $resultado";
        break;
        default:
            $mensagem = "Nenhum valor calculado!";
    }

    echo "<p>$mensagem</p>";

    ?>
    </div>
</body>
</html>