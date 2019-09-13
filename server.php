<?php
  require __DIR__ . '/vendor/autoload.php';

  try {
    $config = parse_ini_file("config.ini", true, INI_SCANNER_RAW);//INI_SCANNER_TYPED //INI_SCANNER_NORMAL //INI_SCANNER_RAW    
  } catch (Exception $e) {
    throw new Exception('El servidor requiere que el fichero de configuración config.ini exista y tenga permisos de lectura.');
  }

  if( !(
      !!$config
      && is_array($config)
      && array_key_exists("pusher_credentials", $config)
      && is_array($config["pusher_credentials"])
  ) ) {
      throw new Exception('El servidor requiere que el fichero de configuración config.ini contenga una sección llamada "pusher_credentials".');
  }

  $pusher_credentials = $config["pusher_credentials"];

  $options = array(
    'cluster' => $pusher_credentials['cluster'],
    'useTLS' => $pusher_credentials['useTLS'] == 'false' ? false : true,
  );
  $pusher = new Pusher\Pusher(
    $pusher_credentials['key'],
    $pusher_credentials['secret'],
    $pusher_credentials['app_id'],
    $options
  );

  echo json_encode( $_POST );
  
  $event = array_keys($_POST)[0];
  $data = $_POST[$event];
  $pusher->trigger('my-channel', $event, $data);
?>