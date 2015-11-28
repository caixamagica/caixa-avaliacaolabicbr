<?php

include_once('dbconfig.php');

if (isset($_POST['m3'])) {

    mysqli_query($conn, sprintf( "INSERT INTO transacoes_caixamagica (idioma, metodo, m3, m3_texto, m3_origem, ip) values ('%s', '%s', '%s', '%s', '%s', '%s' )",
        'por', 3, $_POST['m3'], $_POST['m3_texto'], $_POST['m3_origem'], $_SERVER['REMOTE_ADDR'] ));

    Header('Location: agradecimiento.html');

    exit();

}


$texto_solucao = "select m2 from (select m2, count(*) as contagem from transacoes_caixamagica where metodo=2 "
            . "group by m2 order by contagem desc limit 10) as maisvotadas order by rand()";

$stmt_id_solucao = $conn->stmt_init();
if(!$stmt_id_solucao->prepare($texto_solucao))
{
    print "Failed to prepare statement\n";
}
else
{
    $stmt_id_solucao->execute();
    $result_id_solucao = $stmt_id_solucao->get_result();

    $pega_solucao = mysqli_fetch_assoc($result_id_solucao);

    $texto_solucao = "select id,m1_texto from transacoes_caixamagica where id=? ";

    $stmt_pega_solucao = $conn->stmt_init();

    if(!$stmt_pega_solucao->prepare($texto_solucao))
    {
        print "Failed to prepare statement\n";
    }
    else {

        $stmt_pega_solucao->bind_param("d", $pega_solucao['m2']);

        $stmt_pega_solucao->execute();
        $result_pega_solucao = $stmt_pega_solucao->get_result();

        $solucao = mysqli_fetch_assoc($result_pega_solucao);

    }
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
        <h2><strong>Como você resolveria "<?php echo $solucao['m1_texto']; ?>"</strong></h2>
      </div>
    </div>

    <form method="POST">
        <div class="column">
          <div class="large-12 columns">
            <div class="opcionesp section">
                <!-- Grid Example -->

              <div class="radio-group">
              <input type="radio" name="m3" value="a" id="pokemonRed"><label for="pokemonRed">Contatar uma autoridade</label><br>
              <input type="radio" name="m3" value="b" id="pokemonRed"><label for="pokemonRed">Participar de uma manifestação</label><br>
              <input type="radio" name="m3" value="c" id="pokemonRed"><label for="pokemonRed">Assinar um abaixo-assinado</label><br>
              <input type="radio" name="m3" value="d" id="pokemonRed"><label for="pokemonRed">Realizar uma ação coletiva</label><br/>
              <input type="radio" name="m3" value="e" id="pokemonRed"><label for="pokemonRed">Outra coisa</label>
              </div>

                  <textarea class="coment" name="m3_texto" placeholder="Nenhuma das anteriores? Escreva aqui sua sugestão..."></textarea>
                  <button type="submit" class="medium success button">ENVIAR</button>
                <input type="hidden" name="m3_origem" value="<?php echo $solucao['id']; ?>"/>

              <div class="tool2 section">

                  <a href="javascript:history.back();" class="medium secondary button">

                  <ul id="icons" class="ui-widget ui-helper-clearfix">
                      <li class="ui-state-default ui-corner-all" title="VOLTAR"><span class="ui-icon ui-icon-triangle-1-w"></span></li>
                  </ul>

              <p>VOLTAR</p></a>
                  <a href="index.php?nao_importa=m3:<?php echo $solucao['id']; ?>" class="medium alert button">

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

$stmt_pega_solucao->close();
$stmt_id_solucao->close();

include_once('footer.php');

?>


  </body>
</html>
