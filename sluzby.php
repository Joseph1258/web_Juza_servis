<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style-respon.css">
    <link rel="stylesheet" href="./css/style-burger.css">
    <title>Naše služby</title>
</head>
<body>
    <header class="header">
        <?php
            include "navigation.php";
            // include "menu-respon.php"; - zatím nefunkční
        ?>
    </header>

    <main class="main-sluzby">
        <h1>Naše služby</h1>
        <section class="sluzby-section1">
            <div>
                <img src="./images/sluzby/UDS 232.JPG" alt="UDS 232">
            </div>
            <div class="text-container">
                <h2>Nové stroje</h2>
                <p>Zajišťujeme jako dealer firmy CSM Tisovec prodej nových
                    teleskopických rypadel UDS 214 (automobilní podvozek), UDS 232 (kolový podvozek) a UDS 211 
                    (pásový podvozek). Rypadla UDS 214 jsou v nabídce na novém automobilním podvozku Tatra Phoenix,
                    MAN, IVECO nebo je možné novou nástavbu rypadla UDS 214 namontovat na stávající opravený podvozek
                    Tatra 815. Rypadla na automobilním podvozku s označením UDS 214.41 jsou vybavené mikropojezdem.
                    U strojů vybavených mikropojezdem může obsluha rypadla pojíždět po staveništi a řídit automobilní
                    podvozek z kabiny strojníka.
                </p>
            </div>
        </section>
        <section class="sluzby-section2">
            <div>
                <img src="./images/sluzby/rypadlonakladač CASE 580 Super R.JPG" alt="Rypadlonakladač CASE 580 Super R">
            </div>
            <div class="text-container">
                <h2>Dovoz a prodej použitých strojů</h2>
                <p>Provádíme dovoz kvalitních použitých stavebních strojů ze
                    zahraničí na zakázku dle přání a požadavků svých zákazníků. Provádíme dovoz pásových rypadel,
                    kolových rypadel, rypadlonakladačů, kolových nakladačů, smykem řízených nakladačů nebo teleskopických
                    manipulátorů. Především od výrobců CASE, New Holland,  Kobelco, Kubota a dalších.
                </p>
            </div>
            
        </section>
        <section class="sluzby-section3">
            <div>
                <img src="./images/sluzby/Horní rám rypadla UDS 114.JPG" alt="Horní rám rypadla UDS 114">
            </div>
            <div class="text-container">
                <h2>Náhradní díly</h2>
                <p>Prodáváme veškeré náhradní díly na teleskopická rypadla UDS 114 a UDS 214, smykem řízené
                    nakladače UNC, mobilní jeřáby AD 20 a AD 28, vysokozdvižné vozíky DESTA.
                </p>
            </div>
        </section>
        <section class="sluzby-section4">
            <div>
                <img src="./images/sluzby/Mobilní jeřáby ČKD.jpg" alt="Mobilní jeřáby ČKD">
            </div>
            <div class="text-container">
                <h2>Celkové opravy strojů</h2>
                <p>Provádíme celkové opravy stavebních strojů,
                    mobilních jeřábů, zdvihacích zařízení, zemědělské a lesní techniky.
                </p>
            </div>
        </section>
        <section class="sluzby-section5">
            <div>
                <img src="./images/sluzby/Vyvarovani otvoru.JPG" alt="Vyvařovaní otvoru">
            </div>
            <div class="text-container">
                <h2>Renovace otvorů</h2>
                <p>Provozem strojů se v čepových spojích vytváří vůle, která má špatný vliv na přesnost, výkonnost a spolehlivost stroje.</p>
                <p>Renovace čepových spojů provádíme mobilním obráběcím a navařovacím zařízením Bimotor. 
                    Renovovaný otvor obrobíme na požadovaný rozměr, osadíme novými pouzdry a novým čepem požadované kvality.
                </p>
                <p>Renovace provádíme na uložení výložníků a násad, uložení hydraulických válců, uložení lopat a radlic, uložení náprav a dalších.</p>
            </div>
        </section>
    </main>

    <?php
        include "footer.php";
    ?>
    
</body>
</html>