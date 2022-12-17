<div class="titulo">Funções anonimas</div>

<?php

$soma = function($a, $b) { //atribui função para variável
    return $a + $b;
};

$dividir = function($a, $b) { 
    return $a / $b;
};

function multiplicar($a, $b){
     return $a * $b;
}

echo $soma(1500, 32) . '<br>';

function executarFuncao($a, $b, $operacao, $funcao){ //passa função como parametro
    $result = $funcao($a, $b);
    echo "$a $operacao $b = $result<br>";
}

executarFuncao(1500, 32, " + ", $soma);

executarFuncao(1500, 32, " / ", $dividir);

executarFuncao(1500, 32, " * ", multiplicar);
