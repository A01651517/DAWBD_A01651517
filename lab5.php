<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>DAW - LAB 05</title>

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
          <h2 class="color1-text center">LABORATORIO 5</h2>

          <div class="boxShadow" id="loginBox_lab5">
            <div class="input-field">
              <input id="password1" type="password" class="validate">
              <label for="password1">PASSWORD</label>
            </div>
            <div class="input-field">
              <input id="password2" type="password" class="validate">
              <label for="password2">PASSWORD</label>
            </div>
          </div>

          <br><br>

          <!--ejercicio 2-->
          <div class="row container_lab5">
            <!--Podría haber hecho la tienda más interactiva, dinámica y con más estilo pero no me dió tiempo :/-->
            <h1 class="center color1-text">La ChafiTienda</h1>

            <div class="col l4 m6 s12">
              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-image">
                  <img src="img/oreos.jpg">
                </div>
                <div class="card-action center indigo">
                  <div class="card-title white-text">GALLETAS OREOS - $45</div>
                  <div class="row">
                    <div class="col s4 center padding-12px">
                      <a class="btn-floating btn-large waves-effect waves-light red" id="oreos-add"><i class="material-icons">add</i></a>
                    </div>
                    <div class="col s4 center">
                      <h4 class="white-text" id="oreos-cant">0</h4>
                    </div>
                    <div class="col s4 center padding-12px">
                      <a class="btn-floating btn-large waves-effect waves-light red" id="oreos-remove"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col l4 m6 s12">
              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-image">
                  <img src="img/chipsahoy.jpg">
                </div>
                <div class="card-action center indigo">
                  <div class="card-title white-text">GALLETAS CHIPS AHOY! - $50</div>
                  <div class="row">
                    <div class="col s4 center padding-12px">
                      <a class="btn-floating btn-large waves-effect waves-light red" id="chipsahoy-add"><i class="material-icons">add</i></a>
                    </div>
                    <div class="col s4 center">
                      <h4 class="white-text" id="chipsahoy-cant">0</h4>
                    </div>
                    <div class="col s4 center padding-12px">
                      <a class="btn-floating btn-large waves-effect waves-light red" id="chipsahoy-remove"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col l4 m6 s12">
              <div class="card indigo lighten-1 borderRadius-10px">
                <div class="card-image">
                  <img src="img/emperador.jpg">
                </div>
                <div class="card-action center indigo">
                  <div class="card-title white-text">GALLETAS EMPERADOR - $48</div>
                  <div class="row">
                    <div class="col s4 center padding-12px">
                      <a class="btn-floating btn-large waves-effect waves-light red" id="emperador-add"><i class="material-icons">add</i></a>
                    </div>
                    <div class="col s4 center">
                      <h4 class="white-text" id="emperador-cant">0</h4>
                    </div>
                    <div class="col s4 center padding-12px">
                      <a class="btn-floating btn-large waves-effect waves-light red" id="emperador-remove"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="color1-text center">
              <h2 class="center" id="carrito-total"></h2>
            </div>
          </div>

          <div class="container_lab5 center">
            <div class="form_lab5">
              <div class="input-field">
                <input id="estaturas-nombre" type="text">
                <label for="estaturas-nombre">Nombre</label>
              </div>
              <div class="input-field">
                <input id="estaturas-estatura" type="text">
                <label for="estaturas-estatura">Estatura</label>
              </div>
              <a class="btn-floating btn-large waves-effect waves-light red" id="chartSubmit"><i class="material-icons">add</i></a>
            </div>
            <canvas id="chart_lab5"></canvas>
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
    <script type="text/javascript" src="js/messageControl.js"></script>
    <script src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/lab5.js"></script>

  </body>
</html>
