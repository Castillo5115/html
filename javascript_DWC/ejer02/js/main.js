window.onload = function(){
  let nodoText = document.getElementById("letra");
  
  nodoText.addEventListener("change",mandarLetra);
  function mandarLetra(){      
    letra = nodoText.value
    console.log(letra);        
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        
          
            document.getElementById("opcion").innerHTML = this.responseText;
        
      
      
    }

    xmlhttp.open("POST", "php/dp.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded")
    xmlhttp.send("letra="+letra);
  }
  }