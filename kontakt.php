<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style-respon.css">
    <link rel="stylesheet" href="./css/style-burger.css">
    <title>Kontakt</title>
</head>

<body>
    <header class="header">
        <?php
            include "navigation.php";
            // include "menu-respon.php"; - zatím nefunkční
        ?>
    </header>

    <main class="main-kontakt">
        <h1>Kontakt</h1>
        <section class="kontakt-lide">
            <div class="lide-sloupec">
                <div class="lide">Vladimír Jůza</div>
                <div>majitel</div>
                <div>Tel.: <a href="tel:+603489230">+420 603 489 230</a></div>
            </div>
            <div class="lide-sloupec">
                <div class="lide">Vladimír Jůza ml.</div>
                <div>výroba hydraulických hadic</div>
                <div>Tel.: <a href="tel:+736644303">+420 736 644 303</a></div>
            </div>
            <div class="lide-sloupec">
                <div class="lide">Milena Tománková</div>
                <div>účetní</div>
                <div>Tel.: <a href="tel:+736645707">+420 736 645 707</a></div>
            </div>
        </section>
        <section class="kontakt-adresa">
            <div class="adresa-udaje">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <label>Vožická 2980</label><br>
                        <div>Tábor 390 02</div>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <span>
                        <label><a href="mailto:juzaservis@volny.cz">juzaservis@volny.cz</a></label>
                        <div>Napište nám</div>
                    </span>   
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <label><a href="tel:+420381291083">+420 381 291 083</a></label>
                        <div>pondělí–pátek &nbsp;&nbsp;&nbsp;6:00–15:00</div>
                    </span>      
                </div>
                <div class="kontakt-ic-dic">
                    <label>IČ: 41907213</label>
                    <label>DIČ: CZ6209141543</label>
                </div>
            </div>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.704959125524!2d14.685865215465885!3d49.41448496934415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470c9801912e6187%3A0x4c73791e83015c54!2zVmxhZGltw61yIErFr3phIOKAkyBIeWRyYXVsaWNrw70gc2Vydmlz!5e0!3m2!1scs!2scz!4v1652008902567!5m2!1scs!2scz"
                 class="mapa-iframe" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>

    <?php
        include "footer.php";
    ?>
</body>

</html>