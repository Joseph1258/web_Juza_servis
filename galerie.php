<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style-respon.css">
    <link rel="stylesheet" href="./css/style-burger.css">
    <script type="text/javascript" src="./js/galerie.js"></script>

    <title>Galerie</title>
</head>
<body>
    <header class="header">
        <?php
            include "navigation.php";
            // include "menu-respon.php"; - zatím nefunkční
        ?>
    </header>
    <main class="main-galerie">
        <h1>Galerie</h1>
        <div>
            <!--Tlačítka záložek-->
            <div class="tab">
                <button class="zalozky" onclick="openFoto(event, 'nove_stroje')">Nové stroje</button>
                <button class="zalozky" onclick="openFoto(event, 'dovoz_prodej_pouzite_stroje')">Dovoz a prodej použitých strojů</button>
                <button class="zalozky" onclick="openFoto(event, 'nahradni_dily')">Náhradní díly</button>
                <button class="zalozky" onclick="openFoto(event, 'celkove_opravy')">Celkové opravy strojů</button>
                <button class="zalozky" onclick="openFoto(event, 'renovace_otvoru')">Renovace otvorů</button>      
            </div>  

            <!-- Obsah záložek -->
            <div id="nove_stroje" class="zalozly-obsah">
            <h3>Nové stroje</h3>
                <div class="row">          
                    <div class="column">
                        <img src="./images/galerie/Nove_stroje/nová nástavba UDS 214 namontovaná na opravený podvozek TATRA 815.JPG" alt="Nová nástavba UDS 214" title="Nová nástavba UDS 214" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Nove_stroje/nová UDS 214 mikropojezd namontovaná na opravený podvozek Tatra 815_1.jpg" alt="Nová UDS 214 s mikropojezdem" title="Nová UDS 214 s mikropojezdem" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Nove_stroje/nová UDS 214 mikropojezd namontovaná na opravený podvozek Tatra 815_2.jpg" alt="Nová UDS 214 s mikropojezdem" title="Nová UDS 214 s mikropojezdem" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Nove_stroje/Plovoucí podvozek UDS 1.jpg" alt="Plovoucí podvozek UDS" title="Plovoucí podvozek UDS" style="width:100%" onclick="myFunction(this);">
                    </div>
                </div>
            </div>

            <div id="dovoz_prodej_pouzite_stroje" class="zalozly-obsah">
            <h3>Dovoz a prodej použitých strojů</h3>
                <div class="row">          
                    <div class="column">
                        <img src="./images/galerie/Dovoz_a_prodej_pouzitych_stavebnich_stroju/minirypadlo Kobelco SK 28.JPG" alt="Minirypadlo Kobelco SK 28" title="Minirypadlo Kobelco SK 28" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Dovoz_a_prodej_pouzitych_stavebnich_stroju/pásové rypadlo CASE CX 210B.JPG" alt="Pásové rypadlo CASE CX 210B" title="Pásové rypadlo CASE CX 210B" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Dovoz_a_prodej_pouzitych_stavebnich_stroju/pásové rypadlo CASE CX 300C.JPG" alt="Pásové rypadlo CASE CX 300C" title="Pásové rypadlo CASE CX 300C" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Dovoz_a_prodej_pouzitych_stavebnich_stroju/rypadlonakladač CASE 580 Super R.JPG" alt="Rypadlonakladač CASE 580 Super R" title="Rypadlonakladač CASE 580 Super R" style="width:100%" onclick="myFunction(this);">
                    </div>
                </div>
            </div>

            <div id="nahradni_dily" class="zalozly-obsah">
            <h3>Náhradní díly</h3>
                <div class="row">          
                    <div class="column">
                        <img src="./images/galerie/Prodej_nahradnich_dilu_UDS114_a_UDS214/Horní rám rypadla UDS 114.JPG" alt="Horní rám rypadla UDS 114" title="Horní rám rypadla UDS 114" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Prodej_nahradnich_dilu_UDS114_a_UDS214/Kabina strojníka rypadla UDS 114.JPG" alt="Kabina strojníka rypadla UDS 114" title="Kabina strojníka rypadla UDS 114" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Prodej_nahradnich_dilu_UDS114_a_UDS214/Spodní rámy rypadel UDS 114 a UDS 214.jpg" alt="Spodní rámy rypadel UDS 114 a UDS 214" title="Spodní rámy rypadel UDS 114 a UDS 214" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Prodej_nahradnich_dilu_UDS114_a_UDS214/Venkovní rameno rypadel UDS 114 a UDS 214.JPG" alt="Venkovní rameno rypadel UDS 114 a UDS 214" title="Venkovní rameno rypadel UDS 114 a UDS 214" style="width:100%" onclick="myFunction(this);">
                    </div>
                </div>
            </div>  

            <div id="celkove_opravy" class="zalozly-obsah">
                <h3>Celkové opravy strojů</h3>
                <div class="row">          
                    <div class="column">
                        <img src="./images/galerie/Celkove_opravy_stroju/AD 28 po celkové opravě.JPG" alt="AD 28 po celkové opravě" title="AD 28 po celkové opravě" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Celkove_opravy_stroju/celkova oprava predkopu pro smykovy nakladac.JPG" alt="Celková oprava predkopu pro smykový nakladač" title="Celková oprava predkopu pro smykový nakladač" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Celkove_opravy_stroju/Celkova oprava rypadlonakladace Thwaites.JPG" alt="Celková oprava rypadlonakladače Thwaites" title="Celková oprava rypadlonakladače Thwaites" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Celkove_opravy_stroju/UDS 114 + Tatra 815 pocelkové opravě 1.JPG" alt="UDS 114 na podvozku Tatra 815 po celkové opravě" title="UDS 114 na podvozku Tatra 815 po celkové opravě" style="width:100%" onclick="myFunction(this);">
                    </div>
                </div>
            </div>  

            <div id="renovace_otvoru" class="zalozly-obsah">
                <h3>Renovace otvorů</h3>
                <div class="row">          
                    <div class="column">
                        <img src="./images/galerie/Renovace_otvoru/Navařování otvoru.JPG" alt="Navařování otvoru" title="Navařování otvoru" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Renovace_otvoru/Oprava otvoru u lžíce.JPG" alt="Oprava otvoru u lžíce" title="Oprava otvoru u lžíce" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Renovace_otvoru/Oprava otvorů u nakládací lžíce.JPG" alt="Oprava otvorů u nakládací lžíce" title="Oprava otvorů u nakládací lžíce" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="./images/galerie/Renovace_otvoru/Vyvařování otvoru.JPG" alt="Vyvařování otvoru" title="Vyvařování otvoru" style="width:100%" onclick="myFunction(this);">
                    </div>
                </div>
            </div>
        </div>  

        <div class="container">
            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
            <img id="expandedImg" style="width:100%">
            <div id="imgtext"></div>
        </div>  
    </main>
    <?php
        include "footer.php";
    ?>
    
</body>
</html>