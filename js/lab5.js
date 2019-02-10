function contieneMinus(string){
  /*https://stackoverflow.com/questions/3816905/checking-if-a-string-starts-with-a-lowercase-letter*/
  for (var i = 0; i < string.length; i++) {
    var char = string.charAt(i);
    if (char === char.toLowerCase() && char !== char.toUpperCase()){
      console.log("minus");
      return true;
    }else{
      console.log("no minus");
    }
  }
}
function contieneMayus(string){
  for (var i = 0; i < string.length; i++) {
    var char = string.charAt(i);
    if (char !== char.toLowerCase() && char === char.toUpperCase()){
      console.log("mayus");
      return true;
    }else{
      console.log("no mayus");
    }
  }
}
function especial(string){
  /*https://stackoverflow.com/questions/32311081/check-for-special-characters-in-string*/
  var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
  return format.test(string);
}
function contieneNumero(string) {
  return /\d/.test(string);
}
function checkPasswords(){
  var psw1 = document.getElementById("password1");
  var psw2 = document.getElementById("password2");
  if(psw1.value != null && psw2.value != null){
    if(psw1.value != psw2.value){
      newMessage("Las contraseñas no coinciden", "passwordCheck");
    }else{
      var psmsgs = document.getElementsByClassName("passwordCheck");
      while(psmsgs.length > 0){
        destroyMessage(psmsgs[0]);
      }
      if(psw1.value.length < 8 || !contieneMinus(psw1.value) || !contieneMayus(psw1.value) || !especial(psw1.value)){
        newMessage("La contraseña debe incluir por lo menos 8 characteres, una mayúscula, una minúscula y un símbolo especial");
        psw1.classList.remove("valid");
        psw2.classList.remove("valid");
        psw1.classList.add("invalid");
        psw2.classList.add("invalid");
      }
    }
  }
}

document.getElementById("password1").onchange = function(){checkPasswords();};
document.getElementById("password2").onchange = function(){checkPasswords();};

/*MINITIENDA*/
var precioOreo = 45;
var precioEmperador = 48;
var precioChipsAhoy = 50;
function agrega(producto){
  var cant = parseInt(document.getElementById(producto + "-cant").innerHTML) + 1;
  document.getElementById(producto + "-cant").innerHTML = cant.toString();
  total();
}
function quita(producto){
  var cant = parseInt(document.getElementById(producto + "-cant").innerHTML) - 1;
  if(cant < 0){
    cant = 0;
  }
  document.getElementById(producto + "-cant").innerHTML = cant.toString();
  total();
}
function total(){
  var total = parseInt(document.getElementById("oreos-cant").innerHTML)*precioOreo + parseInt(document.getElementById("chipsahoy-cant").innerHTML)*precioChipsAhoy + parseInt(document.getElementById("emperador-cant").innerHTML)*precioEmperador;
  document.getElementById("carrito-total").innerHTML = "Total: $" + total.toString();
}
document.getElementById("oreos-add").onclick = function(){agrega("oreos")};
document.getElementById("oreos-remove").onclick = function(){quita("oreos")};
document.getElementById("chipsahoy-add").onclick = function(){agrega("chipsahoy")};
document.getElementById("chipsahoy-remove").onclick = function(){quita("chipsahoy")};
document.getElementById("emperador-add").onclick = function(){agrega("emperador")};
document.getElementById("emperador-remove").onclick = function(){quita("emperador")};

/*LIBRE (grafica) https://www.chartjs.org/docs/latest/getting-started/
  Nota: quería empezar a aprender a usar estas gráficas para un proyecto.
  Valida que la estatura se encuentre en un rango aceptable de estatura (no mayor a 210 cm y no menor a 150 cm) y que la informacion venga en cm y no en texto o en metros
*/
function addData(chart, label, data) {
  /*https://www.chartjs.org/docs/latest/developers/updates.html*/
  chart.data.labels.push(label);
  chart.data.datasets.forEach((dataset) => {
    dataset.data.push(data);
  });
  chart.update();
}

function removeData(chart) {
  chart.data.labels.pop();
  chart.data.datasets.forEach((dataset) => {
    dataset.data.pop();
  });
  chart.update();
}
var ctx = document.getElementById('chart_lab5').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["Pedro", "Roberto", "Adrian", "Gilberto"],
        datasets: [{
            label: "Estaturas del salón",
            borderColor: 'rgb(0, 14, 120)',
            data: [150, 172, 171, 180],
        }]
    },

    // Configuration options go here
    options: {}
});
document.getElementById("chartSubmit").onclick = function(){
  /*validacion nombre*/
  var nombre_correcto = false;
  var nombre = document.getElementById("estaturas-nombre").value;
  if(especial(nombre)){
    newMessage("Un nombre no lleva símbolos especiales");
  }else if(contieneNumero(nombre)){
    newMessage("Los nombres no llevan números....");
  }else{
    nombre_correcto = true;
  }
  /*validacion estatura*/
  var estatura_correcta = false;
  var estatura = parseInt(document.getElementById("estaturas-estatura").value);
  if(isNaN(estatura)){
    newMessage("Porfavor ingrese la estatura en centímetros.");
  }else{
    if(estatura > 210 || estatura < 150){
      newMessage("Es muy poco probable que el sujeto tenga esa estatura.... No te creo....");
    }else{
      estatura_correcta = true;
    }
  }
  if(nombre_correcto && estatura_correcta){
    addData(chart, nombre, estatura);
  }
}
