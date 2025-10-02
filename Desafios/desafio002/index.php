<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com formulários</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de REAL para dolar</h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="idnome">Quanto você tem em R$</label>
            <input type="number" name="real" id="idnome" step="0.01">

            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>