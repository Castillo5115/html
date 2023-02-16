window.onload = function(){
  let nodoText = document.getElementById("letra");
  console.log(nodoText);
  nodoText.addEventListener("keyup", dame_ciudades);


  function dame_ciudades(){
      dato = nodoText.value
      if (dato.length == 0) {
        document.getElementById("datos").innerHTML = "";
        return;
      } else {
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
          document.getElementById("datos").innerHTML = this.responseText;
        }
      xmlhttp.open("GET", "php/db.php?dato=" + dato);
      xmlhttp.send();
      }
  }
}