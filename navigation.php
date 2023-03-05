<?php
   $pages = array("Domů" => "index.php",  "Naše služby" => "sluzby.php", "Galerie" => "galerie.php", "Nabídka práce" => "prace.php", "Kontakt" => "kontakt.php"); 
?>
<nav>
    <ul class="menu-seznam">
        <?php
            foreach ($pages as $key => $value) {?>
                <li><a href="<?php echo $value; ?>"><?php echo $key; ?></a></li>
                <?php
            }
        ?>
    </ul>
</nav>