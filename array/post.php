<div class="titulo">$_POST</div>


<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="idade">

    <select name="Casado">
        <option value="Não">Não</option>
        <option value="Sim">Sim</option>
    </select>

    <button type="submit"> Enviar</button>
</form>   

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

print_r($_POST);
