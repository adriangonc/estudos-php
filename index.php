<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
            <div class="modulo verde">
                <h3>Moludo 1 - Básico</h3>
                <ul>
                    <li><a href="exercicio.php?dir=teste&file=teste">Exercicio A</a></li>
                    <li><a href="#">Exercicio B</a></li>
                    <li><a href="#">Exercicio C</a></li>
                </ul>
            </div>
            <div class="modulo azul">
                <h3>Moludo 2</h3>
                <ul>
                    <li><a href="#">Exercicio A</a></li>
                    <li><a href="#">Exercicio B</a></li>
                    <li><a href="#">Exercicio C</a></li>
                </ul>
            </div>
            <div class="modulo amarelo">
                <h3>Moludo 3</h3>
                <ul>
                    <li><a href="#">Exercicio A</a></li>
                    <li><a href="#">Exercicio B</a></li>
                    <li><a href="#">Exercicio C</a></li>
                </ul>
            </div>
            <div class="modulo laranja">
                <h3>Moludo 4</h3>
                <ul>
                    <li><a href="#">Exercicio A</a></li>
                    <li><a href="#">Exercicio B</a></li>
                    <li><a href="#">Exercicio C</a></li>
                </ul>
            </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        adriangong @ <?= date('Y') ?>
    </footer>
</body>
</html>