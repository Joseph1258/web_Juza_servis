//---------------------------------------Detail obrázku--------------------------
function myFunction(imgs) {
    // vrátí zvětšený obrázek
    var expandImg = document.getElementById("expandedImg");
    // vrátí popisek obrázku
    var imgText = document.getElementById("imgtext");
    // Podle vybraného obrázku se nastaví odkaz zvětšeného obrázku
    expandImg.src = imgs.src;
    // Podle vybraného obrázku se nastaví alt zvětšeného obrázku
    imgText.innerHTML = imgs.alt;

    expandImg.parentElement.style.display = "block";
  }


//---------------------------------------Záložky--------------------------
  function openFoto(evt, fotoName) {
    var i, tabcontent, tablinks;
  
    // Vrátí všechny elementy dané záložky a schová je
    tabcontent = document.getElementsByClassName("zalozly-obsah");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // vrátí všechny záložky a zruší aktivní
    tablinks = document.getElementsByClassName("zalozky");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // zobrazí a nastaví aktivní záložku
    document.getElementById(fotoName).style.display = "block";
    evt.currentTarget.className += " active";
  }

//---------------------------------------Burger menu--------------------------
/* Otevření menu*/
function openNav() {
  document.getElementById("mySidenav").style.display = "block";
}

/* Zavření/schování menu */
function closeNav() {
  document.getElementById("mySidenav").style.display = "none";
}