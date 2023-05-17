<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Topologia sieci - topologia pierścienia</title>
        <link rel="stylesheet" type="text/css" href="styl.css">
    </head>
    <body>
        
        <?php
        include ('menu.html');
        ?>
        
        <div id="txt">
            <h2>Topologia pierścienia</h2>
            <div id="img"><img src="ring2.png"></div>
            <p>W tej topologii urządzenia są połączone za pomocą jednego nośnika – kabla – w układzie zamkniętym, czyli okablowanie nie ma żadnych zakończeń i tworzy krąg. Sygnał wędruje tutaj w pętli, od urządzenia do urządzenia. Każda ze stacji roboczych posiada po dwa połączenia, którymi łączy się ze swoimi najbliższymi sąsiadami. Sygnał, przechodząc przez stacje robocze, zostaje przez nie wzmocniony. Urządzenia pobierają i odpowiadają na pakiety do nich zaadresowane, a resztę pakietów przesyłają dalej. Takie połączenie tworzy się najczęściej za pomocą kabla koncentrycznego.</p>
            <p>Główną wadą tej topologii fakt, iż uszkodzenie sieci w jednym miejscu unieruchamia całą sieć. Dlatego zaczęto stosować także topologię podwójnego pierścienia, która działa na tej samej zasadzie, co topologia pierścienia, z tym, że występuje w niej dodatkowe okablowanie. </p>
            <div id="img"><img src="ring.png"></div>                
        </div>
        <?php
            include ('footer.html');
        ?>
    </body>
</html>