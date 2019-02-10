<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>DAW - LAB 01</title>

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
          <h2 class="color1-text center">LABORATORIO 1</h2>
          <div class="row">
            <div class="col s12 cards-container mcols2 xlcols3">
              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Cuál es la diferencia entre Internet y la World Wide Web?</span>
                  <p>La World Wibe Web es la forma de accesar la información con el medio del internet. Es un modelo importante para compartir información, el cual fue construido sobre el internet.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.webopedia.com/DidYouKnow/Internet/Web_vs_Internet.asp">Recuperado de Webopedia</a>
                </div>
              </div>

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Cuál es el propósito de los métodos HTTP: GET, HEAD, POST, PUT, PATCH, DELETE?</span>
                  <p>GET: Usado para pedir información de un recurso en específico. Puede: estar en el cach, quedar en el historial, ser inseguro para información sensitiva, limitado por longitud, sólo modificar.</p>
                  <p>POST: Usado para mandar información a un servidor para crear/actualizar un recurso. No se guarda en cache ni en historial, no tiene restricciones de longitud, seguro para información sensitiva.</p>
                  <p>PUT: Usado para mandar información a un servidor para crear/actualizar un recurso. Igual que POST, sólo que puede ser utilizado varias veces y se obtendrá el mismo resultado.</p>
                  <p>HEAD: Casi identico a GET pero sin el cuerpo de respuesta. Útil para revisar lo que el método GET regresará antes de realizar el comando.</p>
                  <p>DELETE: Usado para borrar un recurso específico.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3schools.com/tags/ref_httpmethods.asp">RECUPERADO DE W3SCHOOLS</a>
                </div>
              </div>

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Qué método HTTP se debe utilizar al enviar un formulario HTML, por ejemplo cuando ingresas tu usuario y contraseña en algún sitio? ¿Por qué?</span>
                  <p>Se debe utilizar el método POST, ya que es un método que puede mandar información de manera segura porque no se guarda en el historial o en el caché.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3schools.com/tags/ref_httpmethods.asp">RECUPERADO DE W3SCHOOLS</a>
                </div>
              </div>

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Qué método HTTP se utiliza cuando a través de un navegador web se accede a una página a través de un URL?</span>
                  <p>Se utiliza el método GET ya que sólo se realiza una solicitud de información y no se manda información sensitiva.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3schools.com/tags/ref_httpmethods.asp">RECUPERADO DE W3SCHOOLS</a>
                </div>
              </div>

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">Un servidor web devuelve una respuesta HTTP con código 200. ¿Qué significa esto? ¿Ocurrió algún error?</span>
                  <p>El código 200 significa que la solicitud fue procesada exitosamente, es decir, no ocurrió algún error. La información que regrese depende del método utilizado.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html">RECUPERADO DE W3.ORG</a>
                </div>
              </div>

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Es responsabilidad del desarrollador corregir un sitio web si un usuario reporta que intentó acceder al sitio y se encontró con un error 404? ¿Por qué?</span>
                  <p>Depende de lo que haya sido programado. Si es una página que debería encontrarse activa, entonces sí debe ser corregida. De otra manera puede ser ignorado ya que es una manera de evitar el acceso a usuarios curiosos.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html">RECUPERADO DE W3.ORG</a>
                </div>
              </div>

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Es responsabilidad del desarrollador corregir un sitio web si un usuario reporta que intentó acceder al sitio y se encontró con un error 500? ¿Por qué?</span>
                  <p>Sí es responsabilidad del desarrollador corregir este error. El error 500 se genera en el caso de que exista un error dentro del servidor de la página.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html">RECUPERADO DE W3.ORG</a>
                </div>
              </div>

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Qué significa que un atributo HTML5 esté depreciado o desaprobado (deprecated)? Menciona algunos elementos de HTML 4 que en HTML5 estén desaprobados.</span>
                  <p>Resulta cuando viejos tags ya no son utilizados o reemplazados por alternativas más funcionales o flexibles. Estos son declarados por W3C - donde se definen los estándares de HTML. Eventualmente las exploradores no soportarán dichos tags y atributos.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.codehelp.co.uk/html/deprecated.html">RECUPERADO DE CODEHELP.CO</a>
                </div>
              </div>

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Cuáles son las diferencias principales entre HTML 4 y HTML5?</span>
                  <p>HTML5 tiene varias mejoras en diferentes ámbitos sobre HTML4. La primera es una forma consistente y definida para el manejo de errores. La segunda es desarrollar la abilidad que el explorador se convierta en una aplicación de plataforma. Finalmente, HTML5 busca mejorar la definición de roles semánticos para elementos existentes y la creación de nuevos elementos.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://stackoverflow.com/questions/134727/whats-the-key-difference-between-html-4-and-html-5">RECUPERADO DE STACKOVERFLOW</a>
                </div>
              </div>

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Qué componentes de estructura y estilo tiene una tabla?</span>
                  <p>Las tablas son definidas por el tag 'table'. Cada fila es definida con el tag 'tr', los encabezados son definidos por el tag 'th' y las celdas son definidas por el tag 'td'.
                    Para que una celda/encabezado se extienda por varias columnas se usa el atributo 'colspan' y para varias filas se utiliza el atributo 'rowspan'.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3schools.com/html/html_tables.asp">RECUPERADO DE W3SCHOOLS</a>
                </div>
              </div>

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Cuáles son los principales controles de una forma HTML5?</span>
                  <p>Los nuevos controles de formulario para inputs son: number, range, date, time, color, search, datalist, tel, email, url. Para complementar los controles se encuentran varios atributos como: placeholder, autofocus, min y max, required.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3.org/community/webed/wiki/Es/Elementos_de_formulario_adicionales_del_HTML5">RECUPERADO DE W3.ORG</a>
                </div>
              </div>

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Qué tanto soporte HTML5 tiene el navegador que utilizas?</span>
                  <p>Actualmente Google Chrome es el navegador que soporta la mayor cantidad de atributos de HTML5</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://html5test.com/results/desktop.html">RECUPERADO DE HTML5TEST</a>
                </div>
              </div>

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text">
                  <span class="card-title center">¿Cuál es el ciclo de vida de los sistemas de información?</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action center indigo">

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
    <script>M.AutoInit();</script>


  </body>
</html>
