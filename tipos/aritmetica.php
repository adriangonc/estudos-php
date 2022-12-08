<div class="titulo">Aritmética</div>

<?php
echo 7 / 4, '<br>'; #Divisão de inteiros pode gerar float

echo intdiv(7, 4), '<br>'; #Força a utilização de int / são retiradas as casas decimais

echo round(7 / 4), '<br>'; #arredonda para o int mais próximo

echo 7 % 4, '<br>'; #Mod resto da divisão

echo 4 ** 5, '<br>'; #Exponenciação

/* Precedência de operadores PHP*/
# () => ** => / * % => + -

echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2, '<br>';