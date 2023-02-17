window.onload = function(){

  let nodoAbecedario = document.getElementById("abc");
  this.th = document.createElement('th');

  nodoAbecedario.addEventListener("change", mostrarPaises);
  nodoTabla = document.getElementById('datos');

  function mostrarPaises(){
      letra = nodoAbecedario.value
      console.log(letra);
      const xmlhttp = new XMLHttpRequest();

      let city = this.responseText.split(",");

      while(nodoTabla.firstChild){
        nodoTabla.removeChild(nodoTabla.firstChild);
      }

      nodoTabla.appendChild(this.th).innerHTML= "PAÏSOS";

      for (let x of city) {
        let tr = document.createElement('tr');
        let td = docuemnt.createElement('td');
        
        nodoTabla.appendChild(tr);
        tr.appendChild(td).innerHTML = x;
      }

      xmlhttp.onload = function() {
        document.getElementById("datos").innerHTML = this.responseText;
      }
      xmlhttp.open("POST", "php/db.php", true);
      xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded")
      xmlhttp.send("letra="+letra);
  }
}