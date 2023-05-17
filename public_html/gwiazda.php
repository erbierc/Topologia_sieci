<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Topologia sieci - topologia gwiazdy</title>
        <link rel="stylesheet" type="text/css" href="styl.css">
    </head>
    <body>
        <?php
        include ('menu.html');
        ?>
        <div id="txt">
            <h2>Topologia gwiazdy</h2>
            <div id="img"><img src="star.png"></div>
            <p>W topologii gwiazdy urządzenia (zwane terminalami) połączone są w jednym punkcie, zwanym punktem dostępu – może być nim koncentrator, przełącznik lub serwer. Nie są zaś połączone między sobą. Ułatwia to wykrywanie usterek w sieci, jednak gdy punkt dostępu zostanie uszkodzony, przerywa to działanie całej sieci. Większość zasobów, z którego korzystają terminale znajduje się na serwerze.</p>
            <p>Jest to obecnie najczęściej spotykana metoda tworzenia sieci lokalnej – jest ona elastyczna, tania oraz skalowalna.</p>
            <div id="img"><img src="extstar.png"></div>
            <p>Istnieje także topologia gwiazdy rozszerzonej – przyjmując, że punktem dostępu jest switch, istnieje w niej więcej przełączników, połączonych do jednego punktu centralnego – który również jest przełącznikiem. Reszta punktów dostępu jest połączona z terminalami, stanowią urządzenie centralne dla własnej topologii gwiazdy.</p>

        </div>
        <?php
            include ('footer.html');
        ?>
    </body>
</html>