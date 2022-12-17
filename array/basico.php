<div class="titulo">Arrays</div>

<?php
$lista = array(1,2,3,4,"Texto");
//print_r($lista);
//var_dump($lista);

//map
$dadosMap = array(
    "age" => 34,
    "name" => "Adriano",
    "address" => array(
        "street" => "Avenida Um",
        "city" => "São Paulo",
        "state" => "SP",
        "country" => "BRA",
        "zipcode" => 12345
    )
);

//print_r($dadosMap);

unset($dadosMap["age"]);
print_r($dadosMap);

//Arrays multidimensionais
echo '<br>';
$dados = [
    [
        "name" => "Adriano",
        "age" => 34,
        "naturalidade" => "Caratinga"
    ],
    [
        "name" => "Sara",
        "age" => 36,
        "naturalidade" => "Pato paraiso"
    ]
    ];

print_r($dados);

$dados[] = 
    [
        "name" => "João",
        "age" => 50,
        "naturalidade" => "Belo oriente"
    ];

print_r($dados);
