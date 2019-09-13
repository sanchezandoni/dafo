<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Cache-Control" content="no-cache" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />

  <title>DAFO</title>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" integrity="sha256-vK3UTo/8wHbaUn+dTQD0X6dzidqc5l7gczvH+Bnowwk=" crossorigin="anonymous" />
</head>
<body>

  <nav class="navbar has-shadow is-spaced is-primary">
    <div class="container">
      <div class="navbar-brand">
        <span class="navbar-item">
          <h1>DAFO</h1>
        </span>
      </div>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-half">
          <h2>Debilidades</h2>

          <!-- <div class="field has-addons"> -->
            <form action="./server.php" method="POST" class="field has-addons">
              <div class="control">
                <input class="input" type="text" placeholder="Debilidad" name="Debilidad">
              </div>
              <div class="control">
                <input type="submit" value="Enviar" class="button is-info js-submit-button">
              </div>
            </form>
          <!-- </div> -->
        </div> <!-- column -->

        <div class="column is-half">
          <h2>Amenazas</h2>

          <!-- <div class="field has-addons"> -->
            <form action="./server.php" method="POST" class="field has-addons">
              <div class="control">
                <input class="input" type="text" placeholder="Amenaza" name="Amenaza">
              </div>
              <div class="control">
                <input type="submit" value="Enviar" class="button is-info js-submit-button">
              </div>
            </form>
          <!-- </div> -->
        </div> <!-- column -->

      </div> <!-- columns -->

      <div class="columns">

        <div class="column is-half">
          <h2>Fortalezas</h2>

          <!-- <div class="field has-addons"> -->
            <form action="./server.php" method="POST" class="field has-addons">
              <div class="control">
                <input class="input" type="text" placeholder="Fortaleza" name="Fortaleza">
              </div>
              <div class="control">
                <input type="submit" value="Enviar" class="button is-info js-submit-button">
              </div>
            </form>
          <!-- </div> -->
        </div> <!-- column -->


        <div class="column is-half">
          <h2>Oportunidades</h2>

          <!-- <div class="field has-addons"> -->
            <form action="./server.php" method="POST" class="field has-addons">
              <div class="control">
                <input class="input" type="text" placeholder="Oportunidad" name="Oportunidade">
              </div>
              <div class="control">
                <input type="submit" value="Enviar" class="button is-info js-submit-button">
              </div>
            </form>
          <!-- </div> -->
        </div> <!-- column -->
      </div> <!-- columns -->
    </div><!-- container -->
  </section>

  <footer class="footer">
    <div class="content has-text-centered">
      <a href="https://bulma.io">
        <img src="https://bulma.io/images/made-with-bulma.png" alt="Made with Bulma" width="128" height="24">
      </a>
    </div>
  </footer>

  <script type="text/javascript">
    var form;
    $("form").submit(function(evt){

      var jqXHR = $.ajax({
          url     : $(this).attr('action'),
          type    : $(this).attr('method'),
          data    : $(this).serialize(),
      }); 

      jqXHR.error = function( xhr, err ) {
                      alert('Error');
                    } 

      jqXHR.done = function( data, textStatus, jqXHR ) {
                      alert('Submitted')
                    }

      
      $(this).find("input[type=text], textarea").val("");
      return false;
    })
  </script>
</body>