<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Cache-Control" content="no-cache" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />

  <title>DAFO Viewer</title>
  <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="./config_js.php"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" integrity="sha256-vK3UTo/8wHbaUn+dTQD0X6dzidqc5l7gczvH+Bnowwk=" crossorigin="anonymous" />

  <style>
    html, body, #app{
      height: 100%
    }

    .columns{
      height: 50%;
    }
  </style>
</head>
<body>
	
	<div id="app">
		<table>
			<div class="columns">
				<div class="column" style="background-color:#F54C10">
					<h1 class="title">Debilidades</h1>
					<ul id="debilidades"></ul>
				</div>
				<div class="column" style="background-color:#34A29C">
					<h1 class="title">Amenazas</h1>
					<ul id="amenazas"></ul>
				</div>
			</div>
			<div class="columns">
				<div class="column" style="background-color:#F79205">
					<h1 class="title">Fortalezas</h1>
					<ul id="fortalezas"></ul>
				</div>
				<div class="column" style="background-color:#36AE61">
					<h1 class="title">Oportunidades</h1>
					<ul id="oportunidades"></ul>
				</div>
			</div>
		</table>
	</div>

	<script type="text/javascript">
	// Enable pusher logging - don't include this in production
	Pusher.logToConsole = true;

	var pusher = new Pusher(CONFIG.pusher_key, {
	  cluster: CONFIG.pusher_cluster,
	  forceTLS: CONFIG.pusher_force_tls
	});

	var channel = pusher.subscribe('my-channel');
	channel.bind('Debilidad', function(data) {
	  // alert(JSON.stringify(data));
	  $("#debilidades").append("<li>"+data+"<li>")
	});

	channel.bind('Amenaza', function(data) {
	  // alert(JSON.stringify(data));
	  $("#amenazas").append("<li>"+data+"<li>")
	});

	channel.bind('Fortaleza', function(data) {
	  // alert(JSON.stringify(data));
	  $("#fortalezas").append("<li>"+data+"<li>")
	});

	channel.bind('Oportunidad', function(data) {
	  // alert(JSON.stringify(data));
	  $("#oportunidades").append("<li>"+data+"<li>")
	});
	</script>
</body>
</html>