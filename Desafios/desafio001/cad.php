<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $cotacao = 5.35;

            $real = $_GET["real"];

            $dolar = $real/$cotacao;

            //echo "<strong>
            //    <p>Seus R$". number_format($real, 2, ",", ".") . " equivale //a US$" . number_format($dolar, 2, ",", ".") . " dólares<p>
            //</strong>";
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </p>
    </main>
</body>
</html>