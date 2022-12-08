<div class="titulo">Desafio</div>

<?php 
    $nun_1 = 128;
    $nun_2 = date("s");
?>

<ul>
    <li>1500 + 32 = <?= 1500 + 32 ?></li>
    <li>1897 * 9 = <?= 1897 * 9?></li>
    <li><?php 
            echo $nun_1 . " * " . $nun_2 . " = " . ($nun_1 * $nun_2); 
        ?>
    </li>
</ul>