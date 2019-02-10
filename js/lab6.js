var hover = false;
var checkHelp_called = false;
function checkHelp(){
  console.log("Check help init");
  setTimeout(function(){
    if(hover){
      alert("Intenta arrastrar el logo ITESM al otro recuadro");
    }
  },2000);
}
function isHovering(){
  console.log("hover");
  hover = true;
  if(!checkHelp_called){
    checkHelp();
  }
}
function outOfElement(){
  console.log("salida");
  hover = false;
}
var cards = document.getElementsByClassName("card");
for (var i = 0; i < cards.length; i++) {
  cards[i].onmouseover = function(){isHovering();}
  cards[i].onmouseout = function(){outOfElement();}
}

/*https://www.w3schools.com/html/tryit.asp?filename=tryhtml5_draganddrop2*/
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
