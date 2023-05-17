<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Topologia sieci</title>
        <link rel="stylesheet" type="text/css" href="styl.css">
    </head>
    <body>
        <?php
        include ('menu.html');
        ?>
        
        <div id="txt">
            <p>Topologia sieci jest modelem układu połączeń elementów sieci komputerowej. Określa relację między urządzeniami, które się w niej znajdują, połączenia między nimi oraz sposoby przepływu danych.</p>
            <p>Topologię dzielimy na fizyczną oraz logiczną.</p>
            <p>Topologia fizyczna określa geometryczny sposób, w jaki elementy sieci są zorganizowane i ze sobą połączone. Graficznie przedstawia jej kształt oraz strukturę. </p>
            <p> W topologii fizycznej wyznaczamy: </p>
                <li><a href="gwiazda.html">topologię gwiazdy</a></li>
                <li><a href="magistrala.html">topologię magistrali</a></li>
                <li><a href="pierścień.html">topologię pierścienia</a></li>
                <li><a href="siatka.html">topologię siatki</a></li>
            <p>Topologia <a href="logiczna.php">logiczna</a> opisuje za to reguły komunikacji, reguły przesyłania danych pomiędzy tymi elementami. Dzięki niej można określić, które urządzenia mogą się komunikować pomiędzy sobą lub mają bezpośrednie, wzajemne połączenie fizyczne. </p>
            <p>Do topologii logicznej zaliczamy:</p>
                <li>topologię punkt-punkt</li>
                <li>topologię żetonu</li>
                <li>topologię rozgłaszania</li>
        </div>
        <?php
            include ('footer.html');
        ?>
    </body>
</html>