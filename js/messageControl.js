function destroyMessage(message){
  if(message != null){
    document.getElementById("message_box").removeChild(message);
  }
}

function newMessage(message){
  var box = document.getElementById("message_box");
  if(box == null){
    box = document.createElement("div");
    box.id = "message_box";
  }
  var container = document.createElement("div");
  container.classList.add("message_container");
  container.onclick = function(){
    destroyMessage(this);
  }
  var textDiv = document.createElement("div");
  textDiv.classList.add("message_text");
  var text = document.createTextNode(message);
  textDiv.appendChild(text);
  container.appendChild(textDiv);
  box.appendChild(container);
  document.body.appendChild(box);
}

function newMessage(message,classes){
  var box = document.getElementById("message_box");
  if(box == null){
    box = document.createElement("div");
    box.id = "message_box";
  }
  var container = document.createElement("div");
  container.setAttribute("class","message_container " + classes);
  container.onclick = function(){
    destroyMessage(this);
  }
  var textDiv = document.createElement("div");
  textDiv.classList.add("message_text");
  var text = document.createTextNode(message);
  textDiv.appendChild(text);
  container.appendChild(textDiv);
  box.appendChild(container);
  document.body.appendChild(box);
}


/*INIT*/
var messages = document.getElementsByClassName("message_container");
for (var i = 0; i < messages.length; i++) {
  messages[i].onclick = function(){
    destroyMessage(this);
  };
}
