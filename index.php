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
                <h3>Básico</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=basico&file=ola">
                            Olá PHP
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=html">
                            Integração HTML
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=css">
                            Integração CSS
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=comentarios">
                            Comentários PHP
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=desafio">
                            Desafio
                        </a>
                    </li>
                </ul>
            </div>

            <div class="modulo azul">
                <h3>Tipos</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=int">
                            Tipo inteiro
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=float">
                            Tipo float
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=aritmetica">
                            Aritmética
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                            Desafio Precedencia
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=string">
                            Tipo String
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=booleano">
                            Tipo Boleano
                        </a>
                    </li>
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