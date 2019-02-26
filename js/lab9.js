function phpRequest(inp){
    var xhttp = new XMLHttpRequest();
    var resp = '';
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
            resp = this.responseText;
            document.getElementById("resp_container").innerHTML = resp;
      }
    };
    xhttp.open("POST", "/php/lab9_calculos.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("input=" + inp);
}

function processInputs(){
  var inputs = document.getElementsByClassName("array_input");
  var string = "";
  for (var i = 0; i < inputs.length; i++) {
    if(i == (inputs.length-1)){
      string += inputs[i].value;
    }else{
      string += inputs[i].value + ",";
    }
  }
  phpRequest(string);
}

document.getElementById("array_btn_confirm").onclick = function(){processInputs();}
