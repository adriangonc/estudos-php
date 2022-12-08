<div class="titulo">Integração CSS</div>

<h1 center azul>
<?php

echo 'Olá';
echo '<small>';
echo ' Mundo!';
echo '</small>';

?>
</h1>

<br>
<div center><button><?= "Teste" ?></button></div>

<style>

    button {
        padding: 5px 20px;
        background-color: #4286f4;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
    }

    /* qualquer elemento que tenha a propriedade ex: center irá usar esse css */
    [center] { 
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286f4;
    }

    [dobro] {
        font-size: 2rem;
    }

</style>