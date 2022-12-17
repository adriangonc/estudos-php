<div class="titulo">For loop</div>

<?php

for($i=0; $i <= random_int(1, 153); $i++){
    echo $i . ',';
    if($i == 15){
        echo '<br>';
        echo 'Interrompido em 15';
        echo '<br>';
        break;
    }
}

$dias = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

for($i=0; $i <= count($dias); $i++){
    echo '<br>' . $dias[$i];
    if($dias[$i] == "Sunday" || $dias[$i] == "Saturday"){
        echo ' Eba!!!';
    }
}

//matrix

$matrix = [
    [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j"]
];

for($i=0; $i <= count($matrix); $i++){
    for($j=0; $j <= count($matrix[$i]); $j++){
        echo "{$matrix[$i][$j]}";
    }
}