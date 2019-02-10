<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>DAW - LAB 06</title>

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

        <div class="watermark watermark-right" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="img/logoTecAzul.png" class="newlogocontainer" draggable="true" ondragstart="drag(event)" id="drag1"></div>
        <div class="watermark watermark-left" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

        <div class="container">
          <h2 class="color1-text center">LABORATORIO 6</h2>
          <div class="row">
            <div class="col s12 cards-container mcols2">

              <div class="card indigo lighten-1 borderRadius-10px helper-parent">
                <div class="card-content white-text hover-fontChange">
                  <span class="card-title center">¿Cuáles son las diferencias entre los posibles valores de la propiedad position??</span>
                  <p>static: se sigue la fluidez del documento. Es el predeterminado.</p>
                  <p>absolute: el elemento es posicionado relativo a su primer elemento padre no static.</p>
                  <p>fixed: el elemento es posicionado relativo a la ventana del navegador.</p>
                  <p>relative: el elemento es posicionado relativo a su posición normal.</p>
                  <p>sticky: el elemento es posicionado relativo a la posición del scroll del usuario.</p>
                  <p>inherit: el elemento hereda la posición del ancestro.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3schools.com/jsref/prop_style_position.asp">Recuperado de W3SCHOOLS</a>
                </div>
                <div class="helper center white-text">
                  <p>Esto es una ayuda</p>
                </div>
              </div>

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text hover-fontChange">
                  <span class="card-title center">¿Cuáles son los valores estándar para la propiedad visibility?</span>
                  <p>visible: el elemento es visible. Este es el predeterminado.</p>
                  <p>hidden: el elemento no es visible pero sigue afectando el layout.</p>
                  <p>collapse: cuando se usa en una table row o cell, el elemento no es visible</p>
                  <p>inherit: el elemento hereda la propiedad de su ancestro.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3schools.com/jsref/prop_style_visibility.asp">RECUPERADO DE W3SCHOOLS</a>
                </div>
              </div>

              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text hover-fontChange">
                  <span class="card-title center">¿Qué es el zIndex y para qué sirve?</span>
                  <p>El zIndex especifica el orden del stack de un elemento. Un elemento con mayor stack estará adelante que otro de menor stack. Sólo funciona para elementos posicionados.</p>
                </div>
                <div class="card-action center indigo">
                  <a href="https://www.w3schools.com/cssref/pr_pos_z-index.asp">RECUPERADO DE W3SCHOOLS</a>
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
    <script type="text/javascript" src="js/lab6.js"></script>
    <script>M.AutoInit();</script>


  </body>
</html>
