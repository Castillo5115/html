function dame_datos(dato){
    if (dato.length == 0) {
      document.getElementById("datos").innerHTML = "";
      return;
    } else {
      const xmlhttp = new XMLHttpRequest();
      xmlhttp.onload = function() {
        document.getElementById("datos").innerHTML = this.responseText;
      }
    xmlhttp.open("GET", "php/db.php?str=" + dato);
    xmlhttp.send();
    }
  }