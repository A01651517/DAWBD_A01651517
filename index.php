<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>DAW - INDEX</title>

    <link rel="icon" href="img/logoTecAzulSimple.png">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>

  <body>
      <?php include_once 'includes/nav.inc.php';?>
    <main>
      <div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <h5 class="center color1-text">PEDRO LUIS GONZÁLEZ ROA</h5>
          <p></p>
          <div class="btnBox">
            <div class="btnBoxTag white-text center">
              LABORATORIOS
            </div>
            <div class="row btnBoxContent">
              <div class="col l3 m4 s6 padding-10px">
                <a href="lab1.php" class="waves-effect waves-light btn color1 borderRadius-10px width-100porc">LABORATORIO 1</a>
              </div>
              <div class="col l3 m4 s6 padding-10px">
                <a href="lab1.php" class="waves-effect waves-light btn color1 borderRadius-10px width-100porc">LABORATORIO 2</a>
              </div>
              <div class="col l3 m4 s6 padding-10px">
                <a href="lab1.php" class="waves-effect waves-light btn color1 borderRadius-10px width-100porc">LABORATORIO 3</a>
              </div>
              <div class="col l3 m4 s6 padding-10px">
                <a href="lab4.php" class="waves-effect waves-light btn color1 borderRadius-10px width-100porc">LABORATORIO 4</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include_once 'includes/footer.inc.php';?>
    <!--ESTA PÁGINA PROXIMAMENTE SERÁ UN ÍNDICE PARA ACCEDER A LOS DIFERENTES LABORATORIOS. EN EL MOMENTO SÓLO MANDA DIRECTO AL PRIMER LABORATORIO-->
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript">M.AutoInit();</script>
  </body>
</html>
