<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>DAW - LAB 04</title>

    <link rel="icon" href="img/logoTecAzulSimple.png">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--ESTE ES EL CSS DEFAULT DE MATERIALIZE-->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!--ESTE ES EL CSS EN DONDE AGREGO MIS ESTILOS ESPECÍFICOS-->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>

  <body>
    <!--COMANDO PARA INCLUIR EL NAV EN TODAS LAS PÁGINAS DE MANERA FÁCIL Y DINÁMICA-->
    <?php include_once 'includes/nav.inc.php';?>
    <main>
      <div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <h2 class="color1-text center">LABORATORIO 4</h2>
          <table class="" id="script_table_target">

          </table>
          <div class="center" id="problema_lab4">
            <p class="color1-text">Esto va a quitar todas las letras repetidas en lo que escribas (se consideran las mayúsculas como letras diferentes):</p>
            <input type="text" name="input" placeholder="Aserejé, ja deje tejebe tude jebere Sebiunouba majabi an de bugui an de buididipí" id="problema_input" onchange="prueba()">
          </div>
          <div class="row">
            <div class="col s12 cards-container mcols2 xlcols3">

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Qué diferencias y semejanzas hay entre Java y JavaScript?</span>
                    <p>Java is an OOP programming language while Java Script is an OOP scripting language.</p>
                    <p>Java creates applications that run in a virtual machine or browser while JavaScript code is run on a browser only.</p>
                    <p>Java code needs to be compiled while JavaScript code are all in text.</p>
                    <p>They require different plug-ins.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.java.com/en/download/faq/java_javascript.xml">RECUPERADO DE JAVA.COM</a>
                </div>
              </div>
              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Qué métodos tiene el objeto Date? (Menciona al menos 5*)</span>
                  <p>Date.now(): Devuelve el valor numérico correspondiente a la hora actual.</p>
                  <p>Date.parse(): Transforma una cadena que representa una fecha, y devuelve el número de milisegundos desde el 1 de enero de 1970, hora local 00:00:00.</p>
                  <p>Date.UTC(): Acepta los mismos parámetros que la forma más larga del constructor, y devuelve el número de milisegundos en un objeto Date desde el 1 de enero de 1970, hora universal 00:00:00.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Date">RECUPERADO DE MOZILLA</a>
                </div>
              </div>
              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Qué métodos tienen los arreglos? (Menciona al menos 5*)</span>
                  <p>toString(): converts an array to a string of (comma separated) array values.</p>
                  <p>pop(): removes the last element from an array.</p>
                  <p>push(): adds a new element to an array (at the end).</p>
                  <p>shift(): removes the first array element and "shifts" all other elements to a lower index.</p>
                  <p>unshift(): adds a new element to an array (at the beginning), and "unshifts" older elements.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3schools.com/js/js_array_methods.asp">RECUPERADO DE W3SCHOOL</a>
                </div>
              </div>
              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Cómo se declara una variable con alcance local dentro de una función?</span>
                  <p>Para que la variable se mantenga dentro de la función, se tiene que declarar con var adentro de esta. De otra manera es declarada como variable global.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3schools.com/js/js_scope.asp">RECUPERADO DE W3SCHOOL</a>
                </div>
              </div>
              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Qué implicaciones tiene utilizar variables globales dentro de funciones?</span>
                  <p>Al utilizar una variable global dentro de una función corre el riesgo de ser modificada.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3schools.com/js/js_scope.asp">RECUPERADO DE W3SCHOOL</a>
                </div>
              </div>
              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Qué método de String se puede utilizar para buscar patrones con expresiones regulares?¿Para qué podrías utilizar esto en una aplicación web?</span>
                  <p>El método match() busca un string contra una expresión regular y regresa el match. Esto puede ser usado para validar la información que ingresa el usuario para una base de datos.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3schools.com/jsref/jsref_match.asp">RECUPERADO DE W3SCHOOL</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </main>
    <!--COMANDO PARA INCLUIR EL NAV EN TODAS LAS PÁGINAS DE MANERA FÁCIL Y DINÁMICA-->
    <?php include_once 'includes/footer.inc.php';?>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript" src="js/lab4.js"></script>
    <script>M.AutoInit();</script>


  </body>
</html>
