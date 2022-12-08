<div class="titulo">Tipo String</div>

<?php 
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

//Concatenação

echo "Nós também " . 'somos!';
echo '<br>', "Também aceito", " virgulas"; # , funciona somente no echo
echo "'Teste aspas simples'" . '"Teste aspas duplas"' . "\"teste\" " . "\\";

print("<br>Também existe a função print()!");

/* Funões string */
echo '<br>' . strtoupper('Adriano');
echo '<br>' . strtolower('Adriano');
echo '<br>' . ucfirst(strtolower('Adriano'));
echo '<br>' . ucwords('upercase para cada palavra!');
echo '<br>Quantas letras? ' . strlen('Quantas letras?');
echo '<br>' . substr('Somente uma parte da frze', 7 , 9); #substring
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso'); #Replace
echo '<br>' . strpos('!AbcaBcabc', 'abc'); #retorna o index onde foi encotrada a string
