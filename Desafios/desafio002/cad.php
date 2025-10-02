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
            $início = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$início.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotação = $dados["value"][0]["cotacaoCompra"];
            
            $real = $_GET["real"] ?? 0;

            $dolar = $real/$cotação;

            //echo "<strong>
            //    <p>Seus R$". number_format($real, 2, ",", ".") . " equivale //a US$" . number_format($dolar, 2, ",", ".") . " dólares<p>
            //</strong>";
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD");"</p></strong>"
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </p>
    </main>
</body>
</html>