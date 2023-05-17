<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Topologia sieci - topologia magistrali</title>
        <link rel="stylesheet" type="text/css" href="styl.css">
    </head>
    <body>
        <?php
        include ('menu.html');
        ?>
        <div id="txt">
            <h2>Topologia magistrali</h2>
            <div id="img"><img src="bus.png"></div>
            <p>Topologia magistrali charakteryzuje się ty, że wszystkie elementy sieciowe połączone są do pojedynczego, wspólnego kabla (najczęściej koncentrycznego) zwanego szyną lub magistralą. Jego zadaniem jest rozprowadzanie sygnału. Oba końce magistrali muszą być zakończone terminatorami – opornikami ograniczającymi. Mają one zapobiegać odbijaniu się impulsu, który mógłby zakłócić pracę odbiorników.</p>
            <p>Sieć oparta na topologii magistrali ma przepustowość 10 Mb/s, a można do niej przyłączyć maksymalnie 30 komputerów. Jeden segment sieci powinien mieć długość nie przekraczającą 185 metrów.</p>
            <p>Topologia ta ze względu na utrudnienia związane z rozmieszczeniem kabla sieciowego jest stosowana jedynie w przypadku prostego rozmieszczenia komputerów, np. w niewielkich biurach lub salach wykładowych. Nie jest też popularna ze względu na brak odporności na awarie. Uszkodzenie jest trudne do wykrycia i unieruchamia całą sieć.</p>
        </div>
        <?php
            include ('footer.html');
        ?>
    </body>
</html>