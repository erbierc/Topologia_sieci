<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Topologia sieci - topologie logiczne</title>
        <link rel="stylesheet" type="text/css" href="styl.css">
    </head>
    <body>
        <?php
            include ('menu.html');
        ?>
        <div id="txt">
            <h2>Topologia punkt-punkt</h2>
            <p>W tej topologii logicznej dane przesyłane są tylko od jednego urządzenia do drugiego. Mogą one być połączone bezpośrednio (na przykład komputer z przełącznikiem) lub pośrednio (dwa oddalone od siebie routery).</p>
            <p>Ta topologia jest często wykorzystywana w sieciach lokalnych, które wykorzystują fizyczną topologię <a href="gwiazda.php">gwiazdy</a>.</p>
            <h2>Topologia przekazywania żetonu</h2>
            <p>W tej topologii dane przekazywane są kolejno do połączonych urządzeń. Urządzenie, które otrzymuje dane analizuje, czy jest adresatem danych, jeśli nie, przekazuje je dalej. Ta topologia jest wykorzystywana w fizycznej topologii <a href="pierścień.php">pierścienia.</a></p>
            <h2>Topologia rozgłaszania</h2>
            <p>Topologia rozgłaszania umożliwia komunikację urządzeń sieciowych poprzez jedno fizyczne medium transmisyjne. Najczęściej stosowana jest w sieciach, które wykorzystują fizyczną topologię <a href=”magistrala.php”>magistrali</a> lub <a href=”gwiazda.php”>gwiazdy</a> w jej wczesnym etapie rozwoju.</p>
            <p>Dane są przesyłane do wszystkich urządzeń w sieci, ale tylko adresat te dane interpretuje.</p>
        </div>
        <?php
            include ('footer.html');
        ?>
    </body>
</html>