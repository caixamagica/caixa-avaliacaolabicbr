<?php

include_once('dbconfig.php');

if (isset($_POST['m1'])) {

    $qualitativo = "";
    switch($_POST['m1']) {
        case "a":
            $qualitativo = "Não tenho ";
            break;
        case "b":
            $qualitativo = "Não existe ";
            break;
        case "c":
            $qualitativo = "Não gosto ";
            break;
    }

    mysqli_query($conn, sprintf( "INSERT INTO transacoes_caixamagica (idioma, metodo, m1, m1_texto, ip) values ('%s', '%s', '%s', '%s', '%s' )",
        'por', 1, $_POST['m1'], $qualitativo.$_POST['m1_texto'], $_SERVER['REMOTE_ADDR'] ));

    Header('Location: decision.php');

    exit();
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
    <link rel="stylesheet" href="css/jquery-ui.css">
    
    <!-- <style>
	
	</style>
	-->
    
  </head>
  <body class="opciones">

    <div class="row">
      <div class="large-12 columns">
        <h2><strong>Qual sua crítica sobre a barca?</strong></h2>
      </div>
    </div>


    <form method="POST">
        <div class="column">
          <div class="large-12 columns">
            <div class="opcionesp section">
                <!-- Grid Example -->
              <!-- <p class="title">Não...</p> -->

			  <h3>Não...</h3>

              <div class="radio-group">
              <input type="radio" name="m1" value="a" id="pokemonRed"><label for="pokemonRed">tenho</label>
              <input type="radio" name="m1" value="b" id="pokemonRed"><label for="pokemonRed">existe</label>
              <input type="radio" name="m1" value="c" id="pokemonRed"><label for="pokemonRed">gosto</label>
              </div>

                  <textarea class="coment" placeholder="Escreva sua queixa aqui..." name="m1_texto"></textarea>
                  <button type="submit" class="medium success button">ENVIAR</button>


              <div class="tool2 section">

                  <a href="javascript:history.back();" class="medium secondary button">

                  <ul id="icons" class="ui-widget ui-helper-clearfix">
                      <li class="ui-state-default ui-corner-all" title="VOLTAR"><span class="ui-icon ui-icon-triangle-1-w"></span></li>
                  </ul>

              <p>VOLTAR</p></a>
                  <a href="index.php?nao_importa=m1" class="medium alert button">

                      <p>NÃO ME IMPORTO</p>
                      <ul id="icons" class="ui-widget ui-helper-clearfix">
                      <li class="ui-state-default ui-corner-all" title="NÃO ME IMPORTA"><span class="ui-icon ui-icon-alert"></span></li>
                  </ul>


              </a>
              </div>

              <!-- FIN Grid Example -->
              </div>

            </div>
          </div>
        </div>
    </form>
  
	<div class="logo"><img src="img/logo_caixa_final.png" alt="Caixa Mágica"></div>

    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/jquery.js"></script>
<?php

    include_once('footer.php');

?>
  </body>
</html>
