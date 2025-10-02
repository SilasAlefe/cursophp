<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <link rel="stylesheet" href="stilo.css">
</head>
<body>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["nome"] ?? "Sem nome";
            $s = $_GET["sobrenome"] ?? "desconhecido(a)";
            echo "<p> É um prazer te conhecer, $n $s! Este é meu site<p>";

            
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </p>
    </main>
</body>
</html>