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


function dame_ciudades(dato){
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


// window.onload = function(){
//   let nodoText = document.getElementById("ciudad");
//   console.log(document.getElementById("ciudad"));
//   nodoText.addEventListener("keyup",mandarLetra);
  
  
  
//   function mandarLetra(){
//      letra = nodoText.value
//       if (letra.length == 0) {
//           document.getElementById("sugerencias").innerHTML = "";
          
//       }else {
         
//           const xmlhttp = new XMLHttpRequest();
//           xmlhttp.onreadystatechange = function() {
             
             
                  
//                   document.getElementById("sugerencias").innerHTML = this.responseText;
              
            
            
//           }
  
//           xmlhttp.open("GET", "../php/ciudades.php?letra=" + letra);
//           xmlhttp.send();
       
//         }
       
//   }
//   }