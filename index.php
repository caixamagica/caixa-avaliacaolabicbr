<?php

if (isset($_REQUEST['nao_importa'])) {

  include_once('dbconfig.php');

  mysqli_query($conn, sprintf( "INSERT INTO transacoes_caixamagica (idioma, metodo, nao_importa, ip) values ('%s', '%s', '%s', '%s' )",
      'por', 4, $_REQUEST['nao_importa'] , $_SERVER['REMOTE_ADDR'] ));

  include_once('footer.php');
}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Caixa Mágica | Inicio</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
  </head>
  <body>

    <div class="row">
      <div class="large-12 columns">
        <h1>Bem-vindo / Bienvenido</h1>
      </div>
    </div>

    <div class="column">
      <div class="large-12 columns">
        <div class="home section">
	        <!-- Grid Example -->
          
          <a href="opciones.html" class="big button">Português</a>
          <a href="#" class="big button">Español</a>
          
          <!-- FIN Grid Example -->
          </div>
        </div>
      </div>
    </div>
                <a href="visualizacao.php" class="medium result button">Acompanhe a participação</a> 

	<div class="logo"><img src="img/logo_caixa_final.png" alt="Caixa Mágica" width="200" height="79"></div>

    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
