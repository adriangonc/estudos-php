<div class="titulo">Desafio Equação</div>

<?php

$numerador1 = 6 * (3+2) ** 2;
$denominador1 = 3*2;

$numerador2 = (1-5)*(2-7) ** 2;
$denominador2 = 2 **2;

$result = ($numerador1 + $numerador2) **3 / ($denominador1 + $denominador2)**3;

echo "Resultado: " . $result;