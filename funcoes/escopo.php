<div class="titulo">
    Função e Escopo
</div>

<?php

$mensagensLogadas = array();

function imprimirMensagenErro($errors){
    foreach($errors as $mensagem) {
        echo $mensagem;
        echo '<br>';
        salvarLog($mensagem);
    }
}

imprimirMensagenErro(["Erro", "Teste"]);

imprimeMensagensVariaveis(["Teste2", "Erro", "V2"]); //Pode enviar qualquer quantidade de parametros

//print_r($mensagensLogadas[0]);

function salvarLog($mensagensLog){
    global $mensagensLogadas; //Usa escopo global
    $mensagensLogadas[] = $mensagensLog;
}


//Argumentos variaveis

function imprimeMensagensVariaveis(...$msgs){
    $id_msg = 0;
    foreach($msgs as $msg){
        echo($msg);
        $id_msg++;
        salvarLog($msg);
    }

}


imprimeMensagensVariaveisComTipoDefinido(["Teste3", "Erro", "Tipo string"]); //Aceita somente o tipo definido

function imprimeMensagensVariaveisComTipoDefinido(array ...$msgs){
    $id_msg = 0;
    foreach($msgs as $msg){
        print_r($msg);
        $id_msg++;
        salvarLog($msg);
    }

}

print_r(count($mensagensLogadas));