<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Topologia sieci - topologia siatki</title>
        <link rel="stylesheet" type="text/css" href="styl.css">
    </head>
    <body>
        <?php
        include ('menu.html');
        ?>
        <div id="txt">
            <h2>Topologia siatki</h2>
            <div id="img"><img src="mesh.png"></div>
            <p>Topologia siatki jest topologią najbardziej odporną na uszkodzenia. Istnieją dwa jej typy: pełna siatka i częściowa siatka.</p>
            <p>Pełna siatka polega na tym, że każdy węzeł sieci ma fizyczne lub wirtualne połączenie z każdym innym węzłem. Pełna sieć zbudowana na takiej topologii zapewnia dużą nadmiarowość, jednak ze względu na duży koszt jest zarezerwowana dla szkieletu sieci.</p>
            <p>W częściowej siatce węzły nie zawierają połączeń z każdym innym węzłem, tylko z niektórymi, najczęściej w tej samej ilości (np. wszystkich węzłów jest 5, a każdy węzeł ma 3 połączenia). Częściowa siatka nie zapewnia nadmiarowości tak jak pełna siatka, jednak jest związana z mniejszymi wydatkami. Jest używana w sieciach peryferyjnych, połączonych ze szkieletem topologii pełnej siatki.</p>
            <p>Jedna z większych zalet tej topologii to niezawodność, a także to, że umożliwia ona przepływ danych wieloma ścieżkami.</p>
            <p>Do wad należy koszt instalacji, zatem jest ona wykorzystywana, gdy wymagana jest wysoka niezawodność sieci, wysoka przepustowość oraz brak kolizji sieciowych.</p>
            <p>Na tej topologii oparty jest Internet.</p>
        </div>
        <?php
            include ('footer.html');
        ?>
    </body>
</html>