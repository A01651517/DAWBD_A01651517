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

        <div class="container">
          <h2 class="color1-text center">LABORATORIO 6</h2>
          <div class="row">
            <div class="col s12 cards-container mcols2">

              <form class="card indigo lighten-1 borderRadius-10px">
                <div class="card-content white-text center">
                  <span class="card-title center">Arreglo de números</span>
                  <a id="array_btn_addNumber" class="btn-floating btn-large white hoverable"><i class="material-icons color1-text">add</i></a>
                    <p class="range-field"><input type="range" name="number1" min="0" max="100" /></p>
                </div>
                <div class="card-action center indigo">
                  <button type="submit" name="submit" class="btn-floating btn-large white hoverable"><i class="material-icons color1-text">check</i></button>
                </div>
              </form>

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
    <script type="text/javascript" src="js/lab9.js"></script>
    <script>M.AutoInit();</script>


  </body>
</html>
