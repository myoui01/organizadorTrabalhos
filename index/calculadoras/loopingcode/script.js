function soma(num1, num2) {
    let total;
    total = eval(num1) + eval(num2);
    document.querySelector("#resultado").value = total;
}

function subtracao(num1, num2) {
    let total;
    total = eval(num1) - eval(num2);
    document.querySelector("#resultado").value = total;
}

function multiplicacao(num1, num2) {
    let total;
    total = eval(num1) * eval(num2);
    document.querySelector("#resultado").value = total;
}

function divisao(num1, num2) {
    let total;
    total = eval(num1) / eval(num2);
    document.querySelector("#resultado").value = total;
}

function fatorial(num1) {
    let fatorial = 1;
    if (eval(num1) > 0) {
        for (var i = 1; i <= eval(num1); i++) {
            fatorial *= i;
        }
        document.querySelector("#resultado").value = fatorial;
    } else if (eval(num1) == 0) {
        document.querySelector("#resultado").value = 1;
    } else {
        document.querySelector("#resultado").value = "Valor <= 0";
    }
    document.querySelector("#resultado").value = fatorial;
}

function euler(num1) { 
    let euler = 1;
    let fatorial = 1;
    for (var i=1; i<=num1;i++){
        fatorial *= i;
        euler += 1/fatorial;
    }
    document.querySelector("#resultado").value = euler;
}

function fibonacci(num1) {
    var fibonacci = [];
    fibonacci[0] = 1;
    fibonacci[1] = 1;
    for (var i = 2; i < num1; i++) {
      fibonacci[i] = fibonacci[i - 2] + fibonacci[i - 1];
    }
    document.querySelector("#resultado").value = fibonacci;
}

function conversao(num1) {
    let total = 0;

    if (oper == "binario") {
        let binario = (num1 % 2).toString();
        for (var i=0; num1 > 0; i++) {
            num1 = parseInt(num1 / 2);
            total =  (num1 % 2) + (binario);
        }
    document.querySelector("#resultado2").value = total;
    } else {
       if (oper == "octal") {
            let octal = (num1 % 8).toString();
            for (var i=0; num1 > 0; i++) {
                num1 = parseInt(num1 / 8);
                total =  (num1 % 8) + (octal);
            }
        document.querySelector("#resultado2").value = total;
        } else {
            if (oper == "hexadecimal") {
                let octal = (num1 % 16).toString();
                for (var i=0; num1 > 0; i++) {
                    num1 = parseInt(num1 / 16);
                    total =  (num1 % 16) + (hexadecimal);
                }
            document.querySelector("#resultado2").value = total;     
          }
       }
    }
    return total;
 } 
 