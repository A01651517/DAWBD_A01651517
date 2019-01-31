/*EJERCICIO 1*/
var respuesta = prompt("Escribe un número del 1 al 9",8);
if(respuesta != null){
  if(respuesta > 9){alert("¿Por qué eres así?");}
  var rowCount = Math.ceil(respuesta/3);
  /*Document.write no me permite ponerlo en donde quiero*/
  for (var i = 0; i < rowCount; i++) {
    var row = document.createElement("tr");
    for (var x = 0; x < 3; x++) {
      var col = document.createElement("td");
      var colVal = (i*3 + x) + 1;
      if(colVal <= respuesta){
        var txt = document.createTextNode(String(colVal));
        col.appendChild(txt);
      }
      row.appendChild(col);
    }
    document.getElementById("script_table_target").appendChild(row);
  }
}

/*EJERCICIO 2*/
var random1 = Math.floor(Math.random()*11);
var random2 = Math.floor(Math.random()*11);
var respuesta = prompt("¿Cuál es el resultado de la operación " + random1 + " + " + random2 + " ?",20);
if(respuesta != null){
  if(respuesta == (random1 + random2)){
    alert("La respuesta es correcta!");
  }else{
    alert("La respuesta es incorrecta :(");
  }
}

/*EJERCICIO 3*/
function contador(array){
  var length = array.length;
  var resultado = [];
  resultado["negativos"] = 0;
  resultado["ceros"] = 0;
  resultado["positivos"] = 0;
  for(var i = 0; i < length; i++){
    if(array[i] < 0){
      resultado["negativos"]++;
    }else if (array[i] == 0) {
      resultado["ceros"]++;
    }else{
      resultado["positivos"]++;
    }
  }
  return resultado;
}

/*EJERCICIO 4*/
function promedios(array){
  var arrayCant = array.length;
  var resultado = [];
  for(var i = 0; i < arrayCant; i++){
    var cant = array[i].length;
    var aux = 0;
    for (var x = 0; x < cant; x++) {
      aux = aux + array[i][x];
    }
    resultado[i] = aux/cant;
  }
  return resultado;
}

/*EJERCICIO 5*/
function inverso(numero){
  var resultado = "";
  numero = String(numero);
  for (var i = 0; i < numero.length; i++) {
    resultado = numero[i] + resultado;
  }
  return resultado;
}

/*EJERCICIO 6*/
class StringProblema {
  constructor(string) {
    this.string = string;
  }
  repetidas(){
    for (var i = 0; i < this.string.length; i++) {
      this.string = this.eliminaChars(this.string[i]);
    }
    return this.string;
  }
  eliminaChars(char){
    var cant = this.string.length;
    var firstAppereance = false;
    var aux = '';
    for(i = 0; i < cant; i++){
      if(this.string[i] == char){
        if(!firstAppereance){
          firstAppereance = true;
          aux = aux + this.string[i];
        }
      }else{
        aux = aux + this.string[i];
      }
    }
    return aux;
  }
}
function prueba(){
  var string = new StringProblema(document.getElementById("problema_input").value);
  document.getElementById("problema_input").value = string.repetidas();
}
